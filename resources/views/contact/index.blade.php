@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container-xl pt-5">
         <div class="row  justify-content-center">
            <div class="col-10">
                <div class="row justify-content-center shadow shadow-lg rounded-4">
                    <div class="col-4">
                        <input type="name" class="bg-transparent border-0 border-bottom w-100 rounded-0 pt-5 pb-3" placeholder="Name">
                        <input type="email" class="bg-transparent border-0 border-bottom w-100 rounded-0 pt-5 pb-3" placeholder="Email">
                        <div class="text-secondary pt-5 pb-2">Message</div>
                        <textarea class="form-control bg-transparent text-white border-0 rounded-0 border-bottom" id="exampleFormControlTextarea1" rows="5"></textarea>
                        <div class="text-end pt-4">
                            <button class="btn btn-light text-secondary rounded-0 fs-5 px-4 py-2">Send</button>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="">
                                <div class="fs-3">
                                   Contact Us
                                </div>
                                <div class=" py-4">
                                    Soluta ipsam expedita officiis aliquid consequuntur non autem earum nobis odit quae. Asperiores numquam animi vel, ipsum iure fugiat maiores et eos.
                                </div>
                                <div class="opacity-75 pb-5">
                                    <div>Email: info@atelier.com</div>
                                    <div>Tel: +99362292214</div>
                                </div>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d73526.07852676236!2d-80.13636250827555!3d25.972830992138444!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1706649522769!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
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
