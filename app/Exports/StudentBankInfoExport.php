<?php

namespace App\Exports;

use App\StudentBankInfo;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentBankInfoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentBankInfo::select('id','gr_number','student_id','admission_id','aadhar_no','bank_name','ifsc','account_no','scholarship_type')->orderBy('id','ASC')->get(); 
    }
    public function headings(): array
    {
        return [
            'SR.NO.',
            'GR. NO.',
            'Student ID',
            'Admission ID',
            'Aadhar Number',
            'Bank Name',
            'IFSC Code',
            'Account Number',
            'Scholarship Type'
            
        ];
    }
    

}
