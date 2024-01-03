<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
            $page = $request->input('page', 1);
            $books = Book::orderBy('id', 'desc')->paginate(10, ['*'], 'page', $page);
            $totalPages = $books->lastPage();
            return view("index", ['books' => $books,'totalPages' => $totalPages]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('create', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $book = new Book;
        $book->bookname = $data['bookname'];
        $book->info = $data['info'];
        $book->years = $data['years'];
        $book->author_id = $data['author_id'];
        $book->save();

        return redirect(url('/books'))->with('thongbao', 'thêm sach  thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        $book1 = Book::with('author')->find($id);
        return view("show", ['book' => $book, 'book1' => $book1]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $book1 = Book::with('author')->find($id);
        $authors = Author::all();
        return view("edit", ['book' => $book, 'book1' => $book1, "authors"=>$authors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $book = Book::find($id);
        $book->update([
            'bookname' => $data['bookname'],
            'info' => $data['info'],
            'years' => $data['years'],
            'author_id' => $data['author_id'],

        ]);

        return redirect(url('/books'))->with('thongbao', 'sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        
        return redirect(url('/books'))->with('thongbao', 'Xóa thành công');
    }
}
