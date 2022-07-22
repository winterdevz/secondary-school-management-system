<?php

namespace Database\Seeders;

use App\Models\DepartmentSubject;
use Illuminate\Database\Seeder;

class DepartmentSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = [
            [
                'id' => 1,
                'subject_name' => 'Mathematics'
            ],
            [
                'id' => 2,
                'subject_name' => 'English'
            ],
            [
                'id' => 3,
                'subject_name' => 'Literature'
            ],
            [
                'id' => 4,
                'subject_name' => 'Economics'
            ],
            [
                'id' => 5,
                'subject_name' => 'Commerce'
            ],
            [
                'id' => 6,
                'subject_name' => 'CRS'
            ],
            [
                'id' => 7,
                'subject_name' => 'IRK'
            ],
            [
                'id' => 8,
                'subject_name' => 'Yoruba Language'
            ],
            [
                'id' => 9,
                'subject_name' => 'Government'
            ],
            [
                'id' => 10,
                'subject_name' => 'Computer'
            ],
            [
                'id' => 11,
                'subject_name' => 'Civic Education'
            ],
            [
                'id' => 12,
                'subject_name' => 'Chemistry'
            ],
            [
                'id' => 13,
                'subject_name' => 'Biology'
            ],
            [
                'id' => 14,
                'subject_name' => 'Physics'
            ],
            [
                'id' => 15,
                'subject_name' => 'Geography'
            ],
            [
                'id' => 16,
                'subject_name' => 'Animal Husbandry'
            ],
            [
                'id' => 17,
                'subject_name' => 'Further Maths'
            ],
            [
                'id' => 18,
                'subject_name' => 'Agricultural Science'
            ],
            [
                'id' => 19,
                'subject_name' => 'Accounting'
            ]
                        
        ];

        DepartmentSubject::insert($subject);
    }
}