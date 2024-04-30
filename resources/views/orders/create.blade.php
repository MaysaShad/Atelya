@extends('layout.app')
@section('content')

<div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-10">
          <div class="card mt-5 shadow shadow-xl">
              <div class="card-header h3 fw-semibold">Order's Page</div>
                <div class="card-body">
                  <form action="{{ url('orders') }}" method="post">
                      @csrf
                      <label class="h5 fw-semibold">Name</label><br>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Name"><br>
                      <label class="h5 fw-semibold">Address</label><br>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Address"><br>
                      <label class="h5 fw-semibold">Mobile</label><br>
                      <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number"><br>
                      <input type="submit" value="Save" class="btn btn-success"><br>
                    </form>
                  </div>
              </div>
         </div>
    </div>
</div>
@stop
