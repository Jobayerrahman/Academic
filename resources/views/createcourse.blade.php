@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-12 my-3">
            <h2>Create course</h2>
        </div>
        <div class="col-6">
            <form action="{{ url('course-store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label  class="form-label mt-4">Course name</label>
                    <input name="course_name" type="text" class="form-control" placeholder="Enter course name">
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