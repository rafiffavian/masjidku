<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mosque_image extends Model
{
    protected $guarded = [];
    protected $appends = ['created_format','updated_format'];

    public function getCreatedFormatAttribute()
    {
    	return date("d F Y H:i:s", strtotime($this->created_at));
    }
    public function getUpdatedFormatAttribute()
    {
    	return date("d F Y H:i:s", strtotime($this->updated_at));
    }
}
