
@extends('layouts.layout')
@section('content')

<div class="container">
<h1 class="text-center">Books List</h1>
    @foreach($book as $b)
    {{$b->name}}- {{$b->bookname}} - {{$b->returnday}} <br>
    @endforeach
</div>
@endsection