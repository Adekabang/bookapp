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
    return Book::all();
  }
}
