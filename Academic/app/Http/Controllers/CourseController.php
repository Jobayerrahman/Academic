<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    //

    function index(){
        $courses = Course::all();
        return view('courseview',['courses'=>$courses]);
    }
    function create(){
        return view('createcourse');
    }
    function store(Request $request){
        $request->validate([
            'course_name' => 'required',
            'semester' => 'required',
            'year' => 'required',
        ]);

        //Create new a course
        if($request->id == NULL){
            Course::create($request->all());
            return redirect('course-view');
        }
        //Update existing a course
        else{
            $course = Course::find($request->id);
            $course->update($request->all());
            return redirect('course-view');
        }
    }
    function edit($id){
        $course = Course::find($id);
        return view('editcourse',['course'=>$course]);
    }
    function destroy($id)
    {
        $course = course::find($id);
        $course->delete();
        return redirect('course-view');
    }
}
