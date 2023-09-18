<?php

namespace App\Exports;

use App\Models\Applications;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ApplicationsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Applications::all();
//    }
    public function view(): View
    {
        return view('admin::application.exports', [
            'applications' => Applications::all()
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
