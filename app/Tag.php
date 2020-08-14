<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public $timestamps = false;
    protected $guarded = ['updated_at','created_at']; //many col
}
