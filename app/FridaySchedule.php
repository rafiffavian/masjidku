<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FridaySchedule extends Model
{
	// protected $fillable = ['id_mosque', ''];
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $guarded = [];
    protected $appends = ['tanggal_format','created_format','updated_format'];

    public function getTanggalFormatAttribute()
    {
    	return date("d F Y", strtotime($this->date));
    }

    public function getCreatedFormatAttribute()
    {
    	return date("d F Y H:i:s", strtotime($this->created_at));
    }
    public function getUpdatedFormatAttribute()
    {
    	return date("d F Y H:i:s", strtotime($this->updated_at));
    }
}
