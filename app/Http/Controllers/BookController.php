<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::withTrashed()->with('author','categories')->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('books.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $book = new Book();
        // $book->title = $request->title;
        // $book->description = $request->description;
        // $book->author_id = $request->author_id;
        // $book->save();

        $book= Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
        ]);
        $book->categories()->sync($request->categories_ids);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('books.edit', compact('book' ,'authors','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'tilte' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
        ]);

        $book->categories()->sync($request->categories_ids);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }

    public function forcedelete(Book $book)
    {
        $book->forceDelete();
        return redirect()->route('books.index');
    }

    public function restore(string $id)
    {
        $book = Book::withTrashed()->where('id', $id)->first();
        $book->restore();

        return redirect()->route('books.index');
    }
}
