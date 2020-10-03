<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookReservation extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;
    public function book(){
    $this->belongsTo('App\Models\Book', 'book_id');
}
