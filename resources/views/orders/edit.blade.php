@extends('layout.app')
@section('content')

<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card mt-5 shadow shadow-xl">
                <div class="card-header h3 fw-semibold">Edit Page</div>
                    <div class="card-body">
                    <form action="{{ url('orders/' .$orders->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$orders->id}}" id="id" />
                    <label>Name</label><br>
                    <input type="text" name="name" id="name" value="{{$orders->name}}" class="form-control" placeholder="Enter order Address"><br>
                    <label>Address</label><br>
                    <input type="text" name="address" id="address" value="{{$orders->address}}"  class="form-control" placeholder="Enter order Address"><br>
                    <label>Mobile</label><br>
                    <input type="text" name="mobile" id="mobile" value="{{$orders->mobile}}" class="form-control" placeholder="Enter order Mobile Number"><br>
                    <input type="submit" value="Update" class="btn btn-success"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop