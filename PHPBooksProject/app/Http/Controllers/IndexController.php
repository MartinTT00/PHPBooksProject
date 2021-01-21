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
            'title' => 'Списък с книги',
            'text' => 'Търсене по автор/жанр',
            'books' => $books, 
            
            ]);
    }

    public function search(Request $request) {
        $searchQuery = $request->get('searchTextInput');
        $searchResult = Author::with('genres', 'books')->where('name', 'LIKE',
            '%'.$searchQuery.'%')->get();
        return view('index.search', [
            'authors' => $searchResult
        ]);
    }
}
