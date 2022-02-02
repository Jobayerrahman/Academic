<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Course;

class ResultController extends Controller
{
    //

    function result($id){
        $results = Result::with('course')->orderBy('semester','ASC')->get()->where('student_id','=',$id);
        $student = $id;
        return view('studentresult',['results'=>$results,'student'=>$student]);
    }

    function select($id){
        $student = $id;
        $courses = Course::all();
        return view('addcourse',['courses'=>$courses,'student'=>$student]);
    }

    function store(Request $request){
        $newresult = new Result;
        $newresult->student_id = $request->student_id;
        $newresult->semester= $request->semester;
        $newresult->year = $request->year;
        $course_id = Course::where('course_name',$request->course_id)->value('id');
        $newresult->course_id = $course_id;

        //Create new a result
        if($request->id == NULL){
            $newresult->save();
            return redirect('result-view/'.$request->student_id);
        }
        //Update existing a result
        else{
            $result = Result::find($request->id);
            $result->result = $request->result;
            $result->save();
            return redirect('result-view/'.$request->student_id);
        }
    }

    function edit($id){
        $results = Result::find($id);
        return view('editresult',['results'=>$results]);
    }
    function destroy($id)
    {
        $student = Result::find($id);
        $student->delete();
        return redirect('/');
    }
}
