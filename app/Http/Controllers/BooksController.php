<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function index()
  {
    $books = Book::all();
    return response()->json([
      'message' => 'show all books',
      'data' => $books
    ], 200);
  }

  public function show($id)
  {
    $book = Book::find($id);
    if ($book) {
      return response()->json([
        'message' => 'show book by id',
        'data' => $book
      ], 200);
    } else {
      return response()->json([
        'message' => 'book not found'
      ], 404);
    }
  }
}
