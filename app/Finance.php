<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
   protected $guarded = [];
   public function tipeCatatan()
   {
   		return $this->belongsTo(FinanceType::class,'id_finance_type');
   		
   }
}
