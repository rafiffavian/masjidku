<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mosque_Donation extends Model
{
    protected $table = "mosque_donations";
    protected $guarded = [];

    public function tipeDonasi()
    {
    	return $this->belongsTo(Master_Donation::class,'id_master_donations');
    }
}
