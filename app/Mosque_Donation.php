<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mosque_Donation extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	
    protected $table = "mosque_donations";
    protected $guarded = [];
    protected $appends = ['nominal_format'];

    public function tipeDonasi()
    {
    	return $this->belongsTo(Master_Donation::class,'id_master_donations');
    }
    public function getNominalFormatAttribute()
   {
  //  		$hasil_rupiah = "Rp " . number_format($this->amount);
		// return $hasil_rupiah;

		return "Rp".number_format($this->minimal,0);
   }
}
