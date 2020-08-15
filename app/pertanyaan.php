<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan'; //default pertanyaans
    // protected $primaryKey = 'id'; //default id

    //save metode assigment
    // protected $fillable = ["judul","isi","user_id"];
    protected $guarded = []; //many col


    public function outhor()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'pertanyaan_has_tags', 'pertanyaan_id', 'tag_id');
    }

    public function upvote()
    {
        return $this->hasMany('App\Upvote', 'pertanyaan_id');
    }
    public function downvote()
    {
        return $this->hasMany('App\Downvote', 'pertanyaan_id');
    }
    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'pertanyaan_id');
    }
    public function jawaban_relevan()
    {
        return $this->hasMany('App\Jawaban_relevan', 'pertanyaan_id');
    }
}
