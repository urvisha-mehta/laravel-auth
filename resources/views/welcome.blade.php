
@extends('layout.layout')

@section('title')
@endsection

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h1>Authentication</h1>
        </div>
        <div class="card-body">
            <div class="text-center">
                <a href="/register" type="button" class="btn btn-primary">Register</a>
                <a href="/login" type="button" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
@endsection

