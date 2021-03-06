@extends('layout.app')
@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-12 my-3">
            <h2>Create Student</h2>
        </div>
        <div class="col-6">
        <form action="{{ url('student-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label  class="form-label mt-4">Student id</label>
                <input name="student_id" type="text" class="form-control" placeholder="Enter student id">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Student name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter student name">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Student surname</label>
                <input name="surname" type="text" class="form-control" placeholder="Enter student surname">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Date of Birth</label>
                <input name="dob" type="text" class="form-control" placeholder="Enter student's date of birth">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Year enroll</label>
                <input name="year_enroll" type="text" class="form-control" placeholder="Enter student's year enroll">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Profile picture</label>
                <input name="image" type="file" class="form-control">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection