<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Finance extends Model
{
   use SoftDeletes;
   protected $dates = ['deleted_at'];

   protected $guarded = [];
   protected $appends = ['tanggal_format', 'nominal_format'];

   // protected $hidden = ['date','id_finance_type'];

   public function tipeCatatan()
   {
   		return $this->belongsTo(FinanceType::class,'id_finance_type');
   }

   public function getTanggalFormatAttribute($value='')
   {
      return date("d F y", strtotime($this->date));
   }

   public function getNominalFormatAttribute($value='')
   {
     return "Rp".number_format($this->amount,0);
   }

}
