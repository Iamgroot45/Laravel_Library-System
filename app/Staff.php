<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function borrowed(){
        return $this->hasMany('App\BorrowedBook', 'staff_id');
    }

    public function dailytimerecords(){
        return $this->hasMany('App\DailyTimeRecord', 'staff_id');
    }
}
