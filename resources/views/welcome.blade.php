@extends('layouts.layout')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div>
       <img style="width: 100%; height:500px" src="/img/book.jpg" alt="">
       <div>
           <p>{{session('msg')}}</p>
       <a  href="{{ route('book.create')}}" style="color:blue;margin-left:100px">Order Book here</a></div>
    </div>
    <div>
  
    </div>
            



                           


                
                </div>
            </div>
        </div>
   @endsection()
