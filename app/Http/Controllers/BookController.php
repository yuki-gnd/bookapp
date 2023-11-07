<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::all();
        return view('book.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('book.add', ['items' => $item]);
    }

    public function create(Request $request)
    {
        $book = new Book;
        $form = $request -> all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/book/add');
    }

    // public function search(Request $request)
    // {
    //     $item = Book::where('title',$request->input)->get();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('book.find', $param);
    // }
}
