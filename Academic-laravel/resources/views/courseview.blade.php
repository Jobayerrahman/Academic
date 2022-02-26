@extends('layout.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-6 my-2">
            <h2>Course List</h2>
        </div>
        <div class="col-6 my-2">
            <a type="button" class="btn btn-primary float-end" href={{ url('/course-create') }}>Create new course</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th>Course Name</th>
                    <th>Semester</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{$course->course_name}}</td>
                    <td>{{$course->semester}}</td>
                    <td>{{$course->year}}</td>
                    <td>
                        <a type="button" class="btn btn-warning btn-sm" href="{{ url('/course-edit',$course->id) }}">edit</a>
                        <a type="button" class="btn btn-danger btn-sm" href="{{ url('/course-delete',$course->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection