<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $guarded = [];
    public $timestamps = false;

    public function borrowers(){
        return $this->hasMany(Borrower::class);
	}
    public function staff(){
        return $this->hasMany('App\Borrower', 'user_id');
    }
}
