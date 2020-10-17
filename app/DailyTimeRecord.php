<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyTimeRecord extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function staff(){
        return $this->belongsTo('App\Staff', 'staff_id');
    }
}
