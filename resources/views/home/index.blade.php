@extends('layouts.app')

@section('content')
    <div class="container py-4">
       <div class="row g-4">
           <div class="col-md-4 col-xl-3">
                @include('app.filter')
           </div>
           <div class="col">
               <div class="row g-3">
                   @forelse($objs as $obj)
                       <div class="col-12">
                           @include('app.home')
                       </div>
                   @empty
                       <div class="col-12">
                           <div class="fs-1 text-center rounded border p-5">
                               Recipe not found :(
                           </div>
                       </div>
                   @endforelse
               </div>
               <div class="pt-4">
                   {{ $objs->links() }}
               </div>
           </div>
       </div>
    </div>
@endsection
