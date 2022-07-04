@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card home-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <a type="button" class="btn btn-primary " href="{{ url('/bootstrap-home') }}">Bootstrap Base</a>
                    </div>
                    <div class="col-12 text-center">
                        <a type="button" class="btn btn-primary" href="{{ url('/react-home') }}">React Base</a>
                    </div>
                    <div class="col-12 text-center">
                        <a type="button" class="btn btn-primary" href="{{ url('#') }}">Apis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

