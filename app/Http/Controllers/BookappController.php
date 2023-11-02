<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookappController extends Controller
{
    public function index() {
        return view('book.index');
    }
}
