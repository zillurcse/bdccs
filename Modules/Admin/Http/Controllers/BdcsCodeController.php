<?php

namespace Modules\Admin\Http\Controllers;

use App\Exports\ApplicationsExport;
use App\Http\Controllers\Controller;
use App\Imports\ApplicationsImport;
use App\Models\BdcsCode;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use App\Models\Branch;
use App\Models\Applications;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Validation\Rule;
use DataTables;
use Auth;
use Dompdf\Dompdf;

class BdcsCodeController extends Controller
{


    public function headerColumns($deleted = false)
    {
        $array = array(

            ['SL', 'SL','text-center', 'width: 5% !important'],
            ['code', 'code','text-center', 'width: 5% !important'],
            ['seller_photo', 'seller_photo','text-center', 'width: 5% !important'],
            ['issue_date', 'issue_date','text-left'],
            ['expire_date', 'expire_date','text-center'],
            ['seller_name', 'seller_name','text-center'],
            ['seller_phone', 'seller_phone','text-center'],
            ['seller_nid', 'seller_nid','text-center'],
            ['status', 'status','text-center'],
            ['created_by', 'created_by','text-center'],
        );

        if($deleted){
            array_push($array, ['deleted_at', 'deleted_at', 'text-center', 'width: 8% !important']);
        }

        array_push($array, ['actions', 'actions', 'text-center', 'width: 20% !important']);

        return $array;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $title='BDCS CODE';
        $applications = BdcsCode::with('user')->orderBy('id','desc');
//dd($applications);
        $options = [
            'Employee' => auth()->user()->hasRole('Employee'),
            'bdcs-code-add' => auth()->user()->hasPermissionTo('bdcs-code-add'),
            'bdcs-code-edit' => auth()->user()->hasPermissionTo('bdcs-code-edit'),
            'bdcs-code-view' => auth()->user()->hasPermissionTo('bdcs-code-view'),
            'bdcs-code-delete' => auth()->user()->hasPermissionTo('bdcs-code-delete'),
//            'bdcs-code-employee-edit' => auth()->user()->hasPermissionTo('bdcs-code-employee-edit'),
        ];

        try {
            if (request()->ajax()) {
                return Datatables::of($applications)
                    ->addIndexColumn()
                    ->editColumn('created_by', function($values){
                        return $values->user->name??'';
                    })
                    ->editColumn('code', function($values){
                        return 'BDCS - '.$values->code;
                    })
                    ->editColumn('seller_photo', function($values){
                        return '<img src="'.asset($values->seller_photo).'" width="80px" height="80px" class="rounded">';
                    })
//
//                    ->editColumn('invoice_date', function($values){
//                        return date('d-m-Y',strtotime($values->invoice_date));
//                    })
//                    ->addColumn('updated_by', function($values){
//                        return $values->user->name??'';
//                    })
//                    ->filterColumn('updated_by', function ($query, $keyword) {
//                        return $query->whereHas('user', function ($query) use($keyword) {
//                            $query->where('name', 'LIKE', '%'.$keyword.'%');
//                        });
//                    })
                    ->editColumn('status', function($values){
                        return ucwords($values->status);
                    })
                    ->addColumn('actions', function($values) use($options){

                        $actions ='';

                        $actions .= '<a href="javascript:void(0)" onclick="return showApplicationDetails('.$values->id.')" class="btn btn-info btn-sm mb-2"><i class="mdi mdi-eye" title="Click to view details"></i></a>';
                        if($options['bdcs-code-edit']){

                            $actions .='<a href="'.route('bdcs-code.edit', $values->id).'" class="btn btn-warning btn-sm mb-2"><i class="mdi mdi-pencil-box" title="Click to Edit"></i></a>';
                        }

//                        if($options['Employee']){
//
//                            $actions .='<a href="'.route('applications.employee.edit', $values->id).'" class="btn btn-warning btn-sm mb-2"><i class="mdi mdi-pencil-box" title="Click to Edit"></i></a>';
//                        }

//                        if($options['bdcs-code-delete']){
//                            $actions .='<a class="btn btn-sm btn-danger mb-2" onclick="deleteFromCRUD($(this))" data-src="'.route('bdcs-code.destroy', $values->id).'"><i class="mdi mdi-trash-can"></i></a>';
//                        }

                        return $actions;
                    })
                    ->rawColumns(['actions', 'seller_photo'])
                    ->make(true);
            }

            return view('admin::bdcs.index', [
                'title' => 'Applications',
                'headerColumns' => $this->headerColumns()
            ]);
        }catch (\Throwable $th){
            return $this->backWithError($th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $title="BDCS CODE create";
        $branches = [''=>'--Select One--']+Branch::orderBy('id','desc')->pluck('name','id')->all();

        return view('admin::bdcs.create',compact('title','branches'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
//dd($input);
        $this->validate($request, [
            'code' => ['required', 'string', 'max:32', 'unique:bdcs_codes'],
            'issue_date' => ['required'],
            'expire_date' => ['required'],
            'seller_name' => ['required', 'string', 'max:64'],
            'seller_address' => ['required', 'string'],
            'seller_phone' => ['required', 'string', 'max:14', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
        ]);

        DB::beginTransaction();

        try {
            $avatarPath='';
            if ($request->hasFile('seller_photo'))
            {
                $avatarPath=$this->photoUpload($request->file('seller_photo'),'uploads/seller_photo',170,170);
                $input['seller_photo']=$avatarPath;
            }
            $nidPath='';
            if ($request->hasFile('nid_file'))
            {
                $nidPath=$this->photoUpload($request->file('nid_file'),'uploads/nid_file',250,220);
                $input['nid_file']=$nidPath;
            }


            $input['created_by'] = Auth::id();
            $input['is_approved'] = 'approved';
            BdcsCode::create($input);

            DB::commit();

            return $this->backWithSuccess('New Saler Register successfully');

        } catch (Exception $e) {
            DB::rollback();
            return $this->backWithError($e->getMessage());
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $seller = BdcsCode::findOrFail($id);
//dd($seller);
        return view('admin::bdcs.show', compact('seller'));

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function editByEmployee($id)
    {
        $application = BdcsCode::findOrFail($id);
        $title="BDCS CODE Update";

        return view('admin::application.editEmployee', compact('application','title'));

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $seller = BdcsCode::findOrFail($id);
        $title="BDCS CODE Update";
        return view('admin::bdcs.edit',compact('seller', 'title'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_token');

        $this->validateSellerData($request);

        DB::beginTransaction();

        try {
            $sellerData = $this->processSellerData($request);

            // Find the seller by ID and update their data
            $seller = BdcsCode::findOrFail($id);
            $seller->update($sellerData);

            DB::commit();

            return redirect()->route('bdcs-code.index')->with('success', 'Seller has been updated successfully!');

        } catch (Exception $e) {
            DB::rollback();
            return $this->backWithError($e->getMessage());
        }
    }

    private function processSellerData($request)
    {
        $sellerData = $request->except('_token');

        if ($request->hasFile('seller_photo')) {
            $avatarPath = $this->photoUpload($request->file('seller_photo'), 'uploads/seller_photo', 170, 170);
            $sellerData['seller_photo'] = $avatarPath;
        }

        if ($request->hasFile('nid_file')) {
            $nidPath = $this->photoUpload($request->file('nid_file'), 'uploads/nid_file', 250, 220);
            $sellerData['nid_file'] = $nidPath;
        }

        $sellerData['created_by'] = Auth::id();

        return $sellerData;
    }
    private function validateSellerData($request)
    {
        $request->validate([
            'issue_date' => ['required'],
            'expire_date' => ['required'],
            'seller_name' => ['required', 'string', 'max:64'],
            'seller_address' => ['required', 'string'],
            'seller_phone' => ['required', 'string', 'max:14', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            // Add more validation rules as needed
        ]);
    }
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try{

            $member = BdcsCode::find($id)->delete();

            if (!empty($member) && file_exists($member->avater)){
                unlink($member->avater);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Saller has been deleted successfully!'
            ]);
        }catch(Exception $e){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function importApplication()
    {
        $title="Application Import";
        $branches = [''=>'--Select One--']+Branch::orderBy('id','desc')->pluck('name','id')->all();

        return view('admin::application.import',compact('title','branches'));
    }

    public function importApplicationData(Request $request)
    {
        try {

            $this->validate($request, [
                'file' => ['required'],
            ]);
            DB::beginTransaction();
            if ($request['file']){
                $sheets = Excel::toArray(new ApplicationsImport, $request->file);
//                dd($sheets);
                $applications = [];
                if(isset($sheets[0])){
                    foreach($sheets as $sheet){
                        foreach($sheet as $key => $row){
                            if($key > 0){
//                                dd($row[9]);
                                $application_data = Applications::where('serial_no', trim($row[0]))->first();
                                if (is_null($application_data)){
                                    array_push($applications, [
                                        "serial_no" => trim($row[0]),
                                        "submit_serial_no" => trim($row[3]),
                                        "recept_no" => trim($row[4]),
                                        "rf_embassy" => $row[1],
                                        "submit_date" => date('Y-m-d'),
                                        "invoice_date" => date('Y-m-d'),
                                        "name" => trim($row[6]),
                                        "old_mrp_no" => trim($row[7]),
                                        "new_mrp_no" => trim($row[8]),
                                        "enrollment_no" => trim($row[9]),
                                        "mobile_no" => trim($row[10]),
                                        "branch_name" => trim($row[11]),
                                        "created_by" => \Illuminate\Support\Facades\Auth::id(),
                                        "remarks" => trim($row[12]),
                                        "status" => 'pending',
                                    ]);
                                }
                            }
                        }
                    }
                }
//                dd($applications);
                if(isset($applications[0])){
                    Applications::insert($applications);
                    DB::commit();
                }

                return $this->redirectBackWithSuccess(count($applications).' has been uploaded','applications.index');
            }else{
                return $this->redirectBackWithWarning('File not found','applications.import');
            }

        }catch(Exception $e){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function ExportApplicationFile()
    {
        return Excel::download(new ApplicationsExport(), 'application.xlsx');
    }

    public function printApplication($id)
    {
        $application = Applications::findOrFail($id);
        $title="Application Edit";
        $branches = [''=>'--Select One--']+Branch::orderBy('id','desc')->pluck('name','id')->all();

        $view = view('admin::application.print',compact('application','title','branches'));
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
//        $dompdf->stream();

        return $dompdf->stream();
    }
}
