<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $guarded = [];
    public $timestamps = false;

    public function borrower(){
        return $this->hasOne('App\Borrower', 'user_id');
    }

    public function staff(){
        return $this->hasOne('App\Borrower', 'user_id');
    }
}
