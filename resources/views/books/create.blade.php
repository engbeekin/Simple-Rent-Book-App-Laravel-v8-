@extends('layouts.layout')
@section('content')
    <div class="container">
<div class="mb-3">
        <h1 class="text-center">Rent Book Here</h1>
        <form action="/book" method="POST">
            @csrf
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" id="id" name="name" placeholder="Renter Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Book Name</label>
  <input type="text" class="form-control" id="name" name="bookname" placeholder="Book Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Return day</label>
  <input type="text" class="form-control" id="id" name="returnday" placeholder="Return day">
</div>
    <button type="submit" class="btn btn-primary  offset-4"> Rent Book Now</button>
</form>
</div>

@endsection