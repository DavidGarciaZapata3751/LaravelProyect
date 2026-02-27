@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 ms-auto">
            <p class="lead">Phone: {{ $viewData["number"] }}</p>
        </div>
        <div class="col-lg-4 me-auto">
            <p class="lead">Developed by: {{ $viewData["author"] }}</p>
        </div>
    </div>
</div>
@endsection
