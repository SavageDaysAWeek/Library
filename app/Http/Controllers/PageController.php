<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index', [
            'books' => Book::with(['author', 'genre'])->get(),
            'authors' => Author::with('books')->get()
        ]);
    }
}
