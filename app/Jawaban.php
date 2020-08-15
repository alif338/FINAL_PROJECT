<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';

    protected $fillable = ['judul', 'isi', 'user_id', 'pertanyaan_id'];
    //
    public function jawaban_relevan()
    {
        return $this->hasOne('App\Jawaban_relevan', 'jawaban_id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
