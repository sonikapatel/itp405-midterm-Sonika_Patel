<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Book;
use App\Author;
use App\Publisher;
class BookController extends Controller{

public function index($id){

$books = DB::select('SELECT reviews.headline, reviews.body, reviews.rating, books.title, authors.first_name, authors.last_name, publishers.name
 from reviews, authors, books, publishers WHERE
 authors.id = books.author_id
 AND reviews.book_id = books.id
 AND books.publisher_id = publishers.id AND
 books.id = ?', [$id]);

dd($books);
}

public function results(){

$books = Book::with('author','publisher')->get();

return view('index',[
      'books'=>$books,
    ]);

}
}
