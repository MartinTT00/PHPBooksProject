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
        $searchCriteria = $request->get('searchCriteria');
        if($searchCriteria == 'genre') {
            $searchResult = Book::with('author', 'genre')->whereHas('genre',
                function ($query) use ($searchQuery){
                $query->where('name', 'LIKE', '%'.$searchQuery.'%');
            })->get();
        }
        else{
            $searchResult = Book::with('author', 'genre')->whereHas('author',
            function ($query) use ($searchQuery){
            $query->where('name', 'LIKE', '%'.$searchQuery.'%');
        })->get();
            
        }
        return view('index.search', [
            'books' => $searchResult
            ]);
    }



}
