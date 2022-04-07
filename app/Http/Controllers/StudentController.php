<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //Main display
    function index(){
        $students = Student::all();
        return view('studentview',['students'=>$students]);
    }

    //New student creating form
    function create(){
        return view('createstudent');
    }

    //New student adding & updating
    function store(Request $request){
        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'dob' => 'required',
            'year_enroll' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        else{
            unset($input['image']);
        }
        //Create new a student
        if($request->id == NULL){
            Student::create($input);
            return redirect('/');
        }
        //Update existing a student
        else{
            $student = Student::find($request->id);
            $student->update($input);
            return redirect('/');
        }
    }
   
    //Existing student update form
    function edit($id){
        $student = Student::find($id);
        return view('editstudent',['student'=>$student]);
    }

    //Existing student delete
    function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}