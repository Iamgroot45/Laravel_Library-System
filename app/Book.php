<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $guarded = [];
    public $timestamps = false;

    public function authors(){
        return $this->belongsToMany('App\Author', 'book_authors', 'book_id', 'author_id')->using('App\BookAuthor');
    }

    public function borrowed(){
        return $this->hasMany('App\BorrowedBook', 'book_id');
    }

    public function reservations(){
        return $this->hasMany('App\BookReservation', 'book_id');
    }

}
