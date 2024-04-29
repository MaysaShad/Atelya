@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container-xl pt-5">
        <div class="display-5 fw-semibold text-info text-center">Wedding Dresses</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">
                 <img src="{{ asset('img/clothes-4.jpg') }}" alt="" class="img-fluid p-3 rounded-5 "> 
                <div class="text-info ps-3 h4 fw-bold ">
                    A-line
                </div>
                </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">
                <img src="{{ asset('img/clothes-5.jpg') }}" alt="" class="img-fluid p-3 rounded-5"> 
                <div class="text-info ps-3 h4 fw-bold">
                    Mermaid  
                </div>
                </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center" >
                <img src="{{ asset('img/clothes-6.jpg') }}" alt="" class="img-fluid p-3 rounded-5 ">
                <div class="text-info ps-3 h4 fw-bold">
                    Princess    
                </div>
            </div>
        </div>
        
        <div class="display-5 fw-semibold text-info text-center">Dresses</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">
                <img src="{{ asset('img/clothes-7.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
                <div class="text-info ps-3 h4 fw-bold">
                    Sundress
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">     
            <img src="{{ asset('img/clothes-8.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Bodycon   
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">
            <img src="{{ asset('img/clothes-18.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Ball Gown   
                </div>
            </div>
        </div>
             
        <div class="display-5 fw-semibold text-info text-center">Skirts</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center ">
            <img src="{{ asset('img/clothes-10.jpg') }}" alt="" class="img-fluid rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Maxi    
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">
            <img src="{{ asset('img/clothes-11.jpg') }}" alt="" class="img-fluid rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Bubble   
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3 text-center">
            <img src="{{ asset('img/clothes-12.jpg') }}" alt="" class="img-fluid rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Circle  
            </div>
            </div>
        </div>

        <div class="display-5 fw-semibold text-info text-center">Jackets</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/clothes-14.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Bomber  
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/clothes-15.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                 Denim      
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/clothes-16.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Parka  
            </div>
            </div>
        </div>

        <div class="display-5 fw-semibold text-info text-center">Hats</div>
        <div class="row p-5">
        <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/hat-1.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Beanie  
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/hat-2.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Floppy    
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/hat-3.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Bucket   
            </div>
            </div>
        </div>
    </div>
                        
@endsection
