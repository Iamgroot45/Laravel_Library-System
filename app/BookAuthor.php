<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookAuthor extends Pivot
{
    //
    protected $guarded = [];
    public $timestamps = false;
}
