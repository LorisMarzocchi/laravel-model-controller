<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function movie() {
        $movies = Movie::all();
        // dd($movies);
        $orgDate = 'movie->date';
        $newDate = date("d-m-Y", strtotime($orgDate));
        return view('welcome', compact('movies'));
        // return view('welcome', [
        //                  'movies' => $movies,
        //                  'date' => $newDate,
        //              ]);
        // }
    }
    public function index() {
        return view("home");
    }
}
//     public function movies() {
//         // il controller chiama il Model per recuperare i dati dal database
//         // SELECT * FROM `books`;

//         // $collBooks = Book::where('title', 'I promessi sposi')->get();
//         // SELECT * FROM `books` WHERE `title` = 'I promessi sposi';

//         // $collBooks = Book::where('title', 'LIKE', '%sposi%')->orderBy('title', 'DESC')->get();
//         // SELECT * FROM `books` WHERE `title` LIKE '%sposi%' ORDER BY `title` DESC;

//         // il controller chiama la View passando dei dati
//         // return view('welcome', compact('movies'));
//         // return view('books', [
//         //     'collBooks' => $books,
//         // ]);
//     }

