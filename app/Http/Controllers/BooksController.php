<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function book(){
        $books = new Book();

        return view('books_view',['books'=>$books->all()]);
    }
    //
}
