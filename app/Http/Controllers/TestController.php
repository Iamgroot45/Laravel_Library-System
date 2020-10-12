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
use StaffSeeder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(){
        $staff = factory(Staff::class)->create();

        /* $staff_update_values = factory(Staff::class)->raw([
            'user_id' => $staff->id
        ]); */

        //echo $staff->id;
        $staff_compact = compact("staff");
        dd($staff_compact["staff"]->id);
    }
}
