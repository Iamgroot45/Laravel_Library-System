<?php

namespace App\Http\Controllers;


use App\Author;
use App\Book;
use App\BookAuthor;
use App\BookReservation;
use App\BorrowedBook;
use App\Borrower;
use App\DailyTimeRecord;
use App\Staff;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(){

        $author = Author::where([
            'last_name' => 'Liebmann',
            'first_name' => 'Emmy',
            'middle_initial' => 'O'
        ])->get();

        dd($author[0] -> id);
      //  $author = Author::find(78);

        //echo $author->books;
    }
}
