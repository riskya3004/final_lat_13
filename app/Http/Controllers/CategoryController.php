<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function filtercategory ($id) {

        $books = Book::where('category_id', '=', $id)->get();

        return view('categorybook', compact('books'));
    }
}
