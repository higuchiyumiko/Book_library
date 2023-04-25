<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Book $book){
        return view('books/index')->with(['books' => $book->getPaginateByLimit()]);  
    }
    public function show(Book $book){
        return view('books/show')->with(['book'=>$book]);
    }
}
