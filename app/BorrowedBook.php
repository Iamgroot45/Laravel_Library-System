<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    //protected $fillable = ['book_id','borrower_id','staff_id','status'];
    //protected $table = 'borrowed_books';
    protected $guarded = [];
    public $timestamps = false;

    public function book(){
        return $this->belongsTo('App\Book', 'book_id');
    }

    public function staff(){
        return $this->belongsTo('App\Staff', 'staff_id');
    }

    public function borrower(){
        return $this->belongsTo('App\Borrower', 'borrower_id');
    }
}
