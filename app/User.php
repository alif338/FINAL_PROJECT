<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    public function jawaban()
    {
        return $this->hasMany('App\jawaban');
    }

    public function pertanyaans()
    {
        return $this->hasMany('App\Pertanyaan', 'user_id');
    }

    public function upvote()
    {
        return $this->hasMany('App\Upvote', 'user_id');
    }
    public function downvote()
    {
        return $this->hasMany('App\Downvote', 'user_id');
    }
}
