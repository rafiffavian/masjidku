<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterRole extends Model
{
    protected $table = "master_role";
    protected $guarded = [];

    public function dataArtikel()
    {
        return $this->hasMany(Artikel::class,'users_id');
    }
}
