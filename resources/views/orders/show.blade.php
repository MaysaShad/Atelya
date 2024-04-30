@extends('layout.app')
@section('content')

<div class="container-xl">
    <div class="card mt-5 shadow shadow-xl">
        <div class="card-header h3 fw-semibold">
            Order's Page
        </div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : {{ $orders->name }}</h5>
                <p class="card-text">Address : {{ $orders->address }}</p>  
                <p class="card-text">Mobile : {{ $orders->mobile}}</p>
            </div>
        </div>
    </div>
</div>
@endsection