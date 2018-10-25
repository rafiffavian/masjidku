<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',//yang diizinkan diisi, guarded kebalikan dari fillable
    ];

    /**
     * The attributes that should be hidden for arrays.
     *  
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function masjid()
    {
         return $this->belongsTo(Mosque::class,'mosque_id');//mosque itu nama file yg tadi dibikin
    }

    public function tipeCatatan()
    {
        return $this->belongsTo(Mosque::class,'mosque_id');//mosque itu nama file yg tadi dibikin
    }
}
