<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Bookview () {
        $books = Book::all();

        return view('home', compact('books'));

    }

    public function filterbooksdetails ($id) {
        $books = Book::find($id);

        return view('detailbook', compact('books'));

    }
}
