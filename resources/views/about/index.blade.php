@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')
<div class="nav-panel" data-nav="nav3">
        <div class="container-xl pt-5 pt-lg-0">
            <div class=" py-5">
                <div class="row justify-content-center px-lg-5 mx-lg-5">
                    <div class="col-10">
                        <div class="">
                            <div class="shadow shadow-lg border bg-white p-4 rounded-5">
                                <div class="h2 pb-4 text-center">
                                    About our Atelier
                                </div>
                                <div class="row">
                                    <div class="col h5 text-center">
                                        Fashion dresses are works of art, and the places where these creations come to life are magical ateliers. A dress atelier is a special space where fabrics dance and imagination takes form.
                                        Skilled tailors caress the fabrics with years of expertise, bringing forth shapes with meticulous stitching. Everything you need to transform your dream dress into reality is present here: the finest silks, delicate laces, shimmering stones.
                                        The tailors meticulously work to create a dress that perfectly fits you, taking your ideas and body shape into consideration.
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('img/logo.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection
