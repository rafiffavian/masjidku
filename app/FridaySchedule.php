<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FridaySchedule extends Model
{
	// protected $fillable = ['id_mosque', ''];
    protected $guarded = [];
    protected $appends = ['tanggal_format'];

    public function getTanggalFormatAttribute($value='')
    {
       return date("d F y", strtotime($this->date));
    }

}
