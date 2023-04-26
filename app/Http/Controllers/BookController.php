<?php

namespace App\Http\Controllers;

use App\Models\Book;
//use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index(Book $book){
        return view('books/index')->with(['books' => $book->getPaginateByLimit()]);  
    }
    public function show(Book $book){
        return view('books/show')->with(['book'=>$book]);
    }
    public function create(){
        return view('books/create');
    }
    public function store(BookRequest $request,Book $book){
        $input=$request['books'];
        $book->fill($input)->save();
        return redirect('/books/'.$book->id);
    }
}
