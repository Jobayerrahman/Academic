@extends('layout.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-6 my-2">
            <h2>Student List</h2>
        </div>
        <div class="col-6 my-2">
            <a type="button" class="btn btn-primary float-end" href="{{ url('/student-create') }}">Create new Student</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="row">Student ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Date of birth</th>
                    <th>Year enroller</th>
                    <th>Profile picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->surname}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->year_enroll}}</td>
                    <td><img class="img-thumbnail rounded" style="width:60px; height:60px; border-radius: 50%;" src="/image/{{ $student->image }}" alt=""></td>
                    <td>
                        <a type="button" class="btn btn-secondary btn-sm" href="{{ url('/result-view',$student->id) }}">Result</a>
                        <a type="button" class="btn btn-warning btn-sm" href="{{ url('/student-edit',$student->id) }}">Edit</a>
                        <a type="button" class="btn btn-danger btn-sm" href="{{ url('/student-delete',$student->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection