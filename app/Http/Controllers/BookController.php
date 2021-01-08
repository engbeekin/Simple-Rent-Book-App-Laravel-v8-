<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // select all data in DB 
    public function index(){
        $book=book::all();

        return view('books.index',['book'=>$book]);
    }

    // showing Details for book
    public function show($id){
        $books=book::findOrFail($id);
        return view ('books.show',['book'=>$books]);
    }

    // creating insert page
    public function create(){

        return view('books.create'); 
    }
    public function store(){
        $b= new book();
        $b->name=request('name');
        $b->bookname=request('bookname');
        $b->returnday=request('returnday');
        $b->save();
        return redirect('/')->with('msg',"Thanks for rent Mr: $b->name"); 
    }
}
