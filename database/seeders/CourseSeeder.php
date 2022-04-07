<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            'course_name'=>'Astronomy',
            'semester'=>'Spring-86',
            'year'=>'1986',
        ]);
        DB::table('courses')->insert([
            'course_name'=>'Charms',
            'semester'=>'Summer-86',
            'year'=>'1986',
        ]);
        DB::table('courses')->insert([
            'course_name'=>'Potions',
            'semester'=>'Fall-86',
            'year'=>'1986',
        ]);
    }
}
