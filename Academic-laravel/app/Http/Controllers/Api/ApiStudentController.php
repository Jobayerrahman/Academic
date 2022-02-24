<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\StudentResource;


class ApiStudentController extends Controller
{
    //
    function index(){
        $student = Student::all();
        return StudentResource::collection($student);
    }
}
