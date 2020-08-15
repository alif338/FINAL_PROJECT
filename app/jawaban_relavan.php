<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban_relavan extends Model
{
    //
    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id');
    }

    public function jawaban()
    {
        return $this->belongsTo('App\Jawaban', 'jawaban_id');
    }
}
