<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'  => 'required|string|min:3|max:255|unique:books,title',
            'author' => 'required|string|min:3|max:255',
            'year'   => 'required|integer|min:1900|max:2026',
            'stock'  => 'required|integer|min:0|max:1000',
        ]);

        Book::create($validated);

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'  => ['required', 'string', 'min:3', 'max:255', Rule::unique('books')->ignore($book->id)],
            'author' => 'required|string|min:3|max:255',
            'year'   => 'required|integer|min:1900|max:2026',
            'stock'  => 'required|integer|min:0|max:1000',
        ]);

        $book->update($validated);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}