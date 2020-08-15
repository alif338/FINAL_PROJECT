<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point_v extends Model
{
    protected $fillable = ['pertanyaan_id', 'jumlah_upvote', 'jumlah_downvote', 'jumlah_jawaban_relevan', 'point'];
    //
    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id');
    }
}
