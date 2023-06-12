@extends('layouts.master')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <h1>Welcome, {{ Auth::user()->name }}</h1>
    </div>
@endsection
