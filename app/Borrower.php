<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function borrowed(){
        return $this->hasMany('App\BorrowedBook', 'borrower_id');
    }

    public function reservations(){
        return $this->hasMany('App\BookReservation', 'borrower_id');
    }
}
