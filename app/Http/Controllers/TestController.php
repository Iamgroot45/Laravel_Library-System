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
        $user = User::find(Staff::find(3)->id);

        dd(Staff::find(3)->id);

    }
}
