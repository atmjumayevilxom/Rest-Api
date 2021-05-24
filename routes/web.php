<?php

use App\Models\Book;
use App\Models\Film;
use App\Models\Author;
use App\Models\Director;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //One One

    // $films = Film::all();
    // foreach ($films as $film) {
    //     echo 'Film name:' . $film['name'] . '<br>';
    //     echo 'Director:' . $film->director['name'] . '<br>';
    //     echo '---------------------------------' . '<br>';
    // }


    // $directors = Director::all();
    // foreach ($directors as $director) {
    //     echo 'Director name:' . $director['name'] . '<br>';
    //     echo 'Film:' . $director->film['name'] . '<br>';
    //     echo '---------------------------------' . '<br>';
    // }


    ///has many

    //One Many
    // $authors = Author::all();
    // foreach ($authors as $author) {
    //     echo 'Author name:' . $author['name'] . '<br>';
    //     echo '<b>Author\'s books : </b></br>';
    //     foreach ($author->books as $book) {
    //         echo $book['title'] . '.<br>';
    //     }
    //     echo '---------------------------------' . '<br>';
    // }

    // //Many One
    // $books = Book::all();
    // foreach ($books as $book) {
    //     echo 'Book title:' . $book['title'] . '<br>';
    //     echo '<b>Author : </b>' . $book['author'] . '</br>';

    //     echo '---------------------------------' . '<br>';
    // }
});
