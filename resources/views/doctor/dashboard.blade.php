@extends('layouts.app')

@section('content')
    <h1>Doctor Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>
@endsection
