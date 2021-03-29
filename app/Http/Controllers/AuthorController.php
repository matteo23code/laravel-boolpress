<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;

class AuthorController extends Controller
{
    public function index()
    {

        $authors = Author::all();
        return view('author.index', compact('authors'));
    }
}
