<?php

namespace App\Exports;

use App\Admission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;


class AdmissionExport implements FromCollection,WithHeadings
{
    public function collection()
    {
        return Admission::select('id','gr_number','student_id','fname','mname','lname','mother_name','gender','dob','age','place_of_birth','admission_date','academic_year','admit_to','current_class','section','medium','nationality','domicile','mother_tounge','caste','category','religion','admission_type','status')->orderBy('id','ASC')->get(); 
            
            
    }

    
        
    public function headings(): array
    {
        return [
            'SR.NO.',
            'GR. NO.',
            'student ID',
            'First Name',
            'Middle Name',
            'Last Name',
            'Mother Name',
            'Gender',
            'DOB',
            'Age',
            'Place Of Birth',
            'Admission Date',
            'Academic Year',
            'Admit To',
            'Current Class',
            'Section',
            'Medium',
            'Nationality',
            'Domicile',
            'Mother Tounge',
            'Caste',
            'Category',
            'Religion',
            'Admission Type',
            'Status',
        ];
    }
    
}
