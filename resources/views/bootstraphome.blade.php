@extends('layouts.app')

@section('content')

<div class="container text-center">
    <div class="card home-card" >
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <a type="button" class="btn btn-primary " href="{{ url('/student-list') }}">Admin portal</a>
                </div>
                <div class="col-12 text-center">
                    <a type="button" class="btn btn-primary" href="{{ url('#') }}">Student portal</a>
                </div>
                <div class="col-12 text-center">
                    <a type="button" class="btn btn-primary" href="{{ url('#') }}">Apis</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection