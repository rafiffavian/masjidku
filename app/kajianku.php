<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class kajianku extends Model
{
 	use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "kajian";
    protected $guarded = [];
    protected $appends = ['tanggal_format'];

    public function dataMasjid()
    {
         return $this->belongsTo(Mosque::class,'id_mosque');
    }

    public function getTanggalFormatAttribute()
    {
    	return date("d F Y", strtotime($this->date));
    }

}
