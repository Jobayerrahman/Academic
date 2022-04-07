<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'student_id'=>'123-456-789',
            'name'=>'Harray',
            'surname'=>'Potter',
            'dob' => '31-07-1980',
            'year_enroll' => '1986',
            'image' => 'potter.jpg',
        ]);
        DB::table('students')->insert([
            'student_id'=>'123-789-456',
            'name'=>'Ron',
            'surname'=>'Weasley',
            'dob' => '01-03-1980',
            'year_enroll' => '1986',
            'image' => 'weasley.jpg',
        ]);
        DB::table('students')->insert([
            'student_id'=>'456-789-123',
            'name'=>'Hermione',
            'surname'=>'Granger',
            'dob' => '19-09-1979',
            'year_enroll' => '1986',
            'image' => 'granger.jpg',
        ]);
    }
}
