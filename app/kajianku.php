<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class kajianku extends Model
{
    protected $table = "kajian";
    protected $guarded = [];

    public function dataMasjid()
    {
         return $this->belongsTo(Mosque::class,'id_mosque');
    }



}
