@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-4">
        <h3>Mobile</h3>
    </div>

    <div class="col-4">
        <h3>Hardware</h3>
    </div>

    <div class="col-4">
        <h3>Software/Internet</h3>
    </div>
@endsection

@section('js')

@endsection
