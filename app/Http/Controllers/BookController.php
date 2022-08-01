<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $books = Book::latest()->paginate(11);
    //     return view ('products.book.list',[
    //         'books' => $books
    //     ]);
    // }
    public function index()
    {
        $books = Book::latest()->paginate(11);
        return view ('products.book.list',[
            'books' => $books
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('isAdmin', auth()->user());
        return view('products.book.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' =>'required',
            'price' =>'required|numeric',
            'page' =>'required|numeric',
        ]);
        Book::create($data);
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        // return view('products.book',[
        //     'book' => $book
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        Gate::authorize('isAdmin', auth()->user());
        return view('products.book.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        Gate::authorize('isAdmin', auth()->user());
        $data = $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' =>'required',
            'price' =>'required|numeric',
            'page' =>'required|numeric',

        ]);
        $book->update($data);
        return redirect('/books');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Gate::authorize('isAdmin', auth()->user());
        $book->delete();
        return redirect('/books');
    }
}
