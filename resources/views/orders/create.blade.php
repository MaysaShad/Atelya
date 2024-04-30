@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">Order's Page</div>
  <div class="card-body">

    <form action="{{ url('orders') }}" method="post">
      {!! csrf_field() !!}
      <label>Name</label><br>
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter Order Name"><br>
      <label>Address</label><br>
      <input type="text" name="address" id="address" class="form-control" placeholder="Enter  Address"><br>
      <label>Mobile</label><br>
      <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"><br>
      <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>
@stop
