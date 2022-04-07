@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-12 my-3">
            <h2>Set result</h2>
        </div>
        <div class="col-6">
            <form action="{{ url('result-store', $results->id ) }}" method="POST">
                @csrf
                <div class="form-group">
                    <input name="student_id" type="text" class="form-control" value="{{ $results->student_id }}" hidden>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Course name</label>
                    <input type="text" class="form-control" value="{{ $results->course->course_name }}" readonly>
                </div>
                <div class="form-group">
                    <label  class="form-label mt-4">Semester</label>
                    <input type="text" class="form-control" value="{{ $results->semester }}" readonly>
                </div>
                <div class="form-group">
                    <label  class="form-label mt-4">Year</label>
                    <input type="text" class="form-control" value="{{ $results->year}}" readonly>
                </div>
                <div class="form-group">
                    <label  class="form-label mt-4">Result</label>
                    <input name="result" type="text" class="form-control" value="{{ $results->result}}">
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </from>
        </div>
    </div>
</div>
@endsection