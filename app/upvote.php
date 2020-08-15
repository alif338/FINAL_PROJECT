<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Upvote extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id', 'pertanyaan_id'];
    //
    public function pertanyaan()
    {
        return $this->BelongsTo('App\Pertanyaan', 'pertanyaan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
