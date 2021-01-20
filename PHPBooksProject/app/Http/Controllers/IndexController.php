<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Author;

class IndexController extends Controller
{
    public function index() {

        //Get data from DB in here and pass it to the view
        $books = Book::with('author', 'genre')->orderByDesc('id')->get();
        return view('index.index', [
            'title' => 'yooyoyoyoy',
            'text' => 'daskdasdkas',
            'books' => $books, 
            
            ]);
    }
}
