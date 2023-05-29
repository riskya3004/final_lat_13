<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisherindex () {
        $publisher = Publisher::all();

        return view('/listpublisher', compact('publisher'));

    }

    public function filterpublisher ($id) {
        $publisher = Publisher::find($id);
        $books = Book::where('publisher_id', '=', $id)->get();

        return view('/publisher', compact('publisher', 'books'));

    }
}
