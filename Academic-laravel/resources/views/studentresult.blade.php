@extends('layout.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-6 my-2">
            <h2>Student result</h2>
        </div>
        <div class="col-6 my-2">
            <a type="button" class="btn btn-primary float-end" href="{{ url('/course-add',$student) }}">Add new course</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th>Course name</th>
                    <th>Semester</th>
                    <th>Year</th>
                    <th>Marks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                <tr>
                    <td>{{ $result->course->course_name }}</td>
                    <td>{{ $result-> semester }}</td>
                    <td>{{ $result-> year }}</td>
                    <td>{{ $result-> result }}</td>
                    <td>
                        <a type="button" class="btn btn-warning btn-sm" href="{{ url('/result-edit',$result->id) }}">Set marks</a>
                        <a type="button" class="btn btn-danger btn-sm" href="{{ url('/result-delete',$result->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection