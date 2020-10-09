<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    //eloquent model
    protected $guarded = [];
    public $timestamps = false;

    //user
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //book borrowed
    public function borrowed(){
        return $this->hasMany('App\BorrowedBook', 'borrower_id');
    }
    //book reserved
    public function reservations(){
        return $this->hasMany('App\BookReservation', 'borrower_id');
    }
}
