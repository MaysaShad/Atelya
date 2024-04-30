@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header">
        Course's Page
    </div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $orders->name }}</h5>
            <p class="card-text">Address : {{ $orders->address }}</p>  
            <p class="card-text">Mobile : {{ $orders->mobile}}</p>
        </div>
    </div>
</div>
@endsection