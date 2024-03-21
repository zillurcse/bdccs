<?php

namespace App\Http\Controllers;

use App\Exports\ApplicationsExport;
use App\Models\MipimData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MipimDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data = MipimData::where('email', '**********')->orderBy('company_name', 'asc')->get();
//
//        return response()->json($data);
        return Excel::download(new ApplicationsExport(), 'mipim_data.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        20+20+20
        $data = DB::table('web_scrap')->select('id', 'data')->skip(60)->take(7)->get();
//        $data = DB::table('web_scrap')->select('id', 'data')->take(20)->get();

        foreach ($data as $d){
            $item = json_decode($d->data, true);
            foreach ($item['hits'] as $data){
//                return response()->json($data);
                MipimData::create([
                    'first_name' => $data['firstName'],
                    'last_name' => $data['lastName'],
                    'name' => $data['firstName'] .' '.$data['lastName'],
                    'job_position' => $data['jobTitle']??'',
                    'email' => $data['email']??'',
                    'phone' => $data['phone']??'',
                    'company_name' => $data['exhibitingOrganisation']['displayName']??'',
                    'type' => $data['_highlightResult']['featureFilters'][0]['multilingualNames'][0]['name']['value']??'',
                    'country' => $data['exhibitingOrganisation']['country']??'',
                ]);
            }
        }

        echo 'done';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MipimData  $mipimData
     * @return \Illuminate\Http\Response
     */
    public function show(MipimData $mipimData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MipimData  $mipimData
     * @return \Illuminate\Http\Response
     */
    public function edit(MipimData $mipimData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MipimData  $mipimData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MipimData $mipimData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MipimData  $mipimData
     * @return \Illuminate\Http\Response
     */
    public function destroy(MipimData $mipimData)
    {
        //
    }
}
