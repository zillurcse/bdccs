<?php

namespace App\Exports;

use App\Models\Applications;
use App\Models\MipimData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Exportable;

class ApplicationsExport implements FromView, ShouldQueue
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Applications::all();
//    }
    public function view(): View
    {
//        return view('admin::application.exports', [
//            'applications' => Applications::all()
//        ]);
        return view('admin::application.mipim', [
            'applications' => MipimData::orderBy('company_name', 'asc')->get()
        ]);
    }

//    public function headings(): array
//    {
//        return [
//            'Serial No',
//            'RF Embassy',
//            'Submit Date',
//            'Submit Serial No',
//            'Receipt No',
//            'Invoice Date',
//            'Name',
//            'Old MRP No',
//            'New MRP No',
//            'Enrollment No',
//            'Mobile No',
//            'Area/Branch',
//            'Remarks',
//        ];
//    }
}
