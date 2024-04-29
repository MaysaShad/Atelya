@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container-xl pt-5">
        <div class="display-5 fw-semibold text-info text-center">Wedding Dresses</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
                 <img src="{{ asset('img/wedding-3.jpeg') }}" alt="" class="img-fluid p-3 rounded-5"> 
                <div class="text-info ps-3 h4 fw-bold ">
                    A-line
                </div>
                </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
                <img src="{{ asset('img/wedding-1.jpg') }}" alt="" class="img-fluid rounded-5"> 
                <div class="text-info ps-3 h4 fw-bold">
                    Mermaid  
                </div>
                </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3" >
                <img src="{{ asset('img/wedding-2.jpg') }}" alt="" class="img-fluid rounded-5">
                <div class="text-info ps-3 h4 fw-bold">
                    Princess    
                </div>
            </div>
        </div>
        
        <div class="display-5 fw-semibold text-info text-center">Dresses</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
                <img src="{{ asset('img/dress-1.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
                <div class="text-info ps-3 h4 fw-bold">
                    Sundress
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">     
            <img src="{{ asset('img/dress-2.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Bodycon   
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/dress-3.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Ball Gown   
                </div>
            </div>
        </div>
             
        <div class="display-5 fw-semibold text-info text-center">Skirts</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/skirt.jpg') }}" alt="" class="img-fluid rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Maxi    
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/skirt-2.jpg') }}" alt="" class="img-fluid rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Bubble   
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/skirt-3.jpg') }}" alt="" class="img-fluid rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                Circle  
            </div>
            </div>
        </div>

        <div class="display-5 fw-semibold text-info text-center">Jackets</div>
        <div class="row p-5">
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/jachet.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Bomber  
                </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/jacket-2.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                 Denim      
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/jacket-3.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
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
            <img src="{{ asset('img/intro.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Floppy    
            </div>
            </div>
            <div class="col-4 border border-3 shadow shadow-xl rounded-5 p-3">
            <img src="{{ asset('img/hat-2.jpg') }}" alt="" class="img-fluid p-3 rounded-5">
            <div class="text-info ps-3 h4 fw-bold">
                    Bucket   
            </div>
            </div>
        </div>
    </div>
                        
@endsection
