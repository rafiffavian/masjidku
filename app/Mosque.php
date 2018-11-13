<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mosque extends Model
{
    protected $table = "masjidku";

    protected $guarded = [];

    public function jadwalJumatan()
    {
    	return $this->hasMany(FridaySchedule::class, 'id_mosque');
    }
    public function jadwalKajianKu()
    {
    	return $this->hasMany(kajianku::class, 'id_mosque');
    }
    public function Keuangan()
    {
        return $this->hasMany(Finance::class, 'id_mosque');
    }
    public function mosqueImage()
    {
        return $this->hasMany(Mosque_image::class, 'id_mosque');
    }
    public function mosqueMember()
    {
        return $this->hasMany(Mosque_member::class, 'id_mosque');
    }
    public function Donasi()
    {
        return $this->hasMany(Mosque_Donation::class, 'id_mosque');
    }
}
