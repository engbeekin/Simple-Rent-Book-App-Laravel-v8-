@extends('layouts.layout')
@section('content')
    
<div class="container">
    
  <p> Renter Name:  {{$book->name}} </p>
  <p> Book Name:  {{$book->name}} </p>
  <p> Return day:  {{$book->returnday}} </p>
  
  
</div>

@endsection