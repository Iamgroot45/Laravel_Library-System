<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyTimeRecords extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function staff(){
        return $this->belongsTo('App\Staff', 'staff_id');
    }
}
