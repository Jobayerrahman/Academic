@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-12 my-3">
            <h2>Add new course</h2>
        </div>
        <div class="col-6">
            <form action="{{ url('result-store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input name="student_id" type="text" class="form-control" value="{{ $student }}" hidden>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Course name</label>
                    <select name="course_id" class="form-select" id="exampleSelect1">
                        @foreach($courses as $course)
                        <option >{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label  class="form-label mt-4">Semester</label>
                    <input name="semester" type="text" class="form-control" placeholder="Enter course semester">
                </div>
                <div class="form-group">
                    <label  class="form-label mt-4">Year</label>
                    <input name="year" type="text" class="form-control" placeholder="Enter course year">
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </from>
        </div>
    </div>
</div>
@endsection