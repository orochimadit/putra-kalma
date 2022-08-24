<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use HasFactory;
 protected $fillable = ['pay_type','amount','date','proof','bank_id','status','sale_id'];

 public function bank()
 {
     return $this->belongsTo(Bank::class);
 }

 
 public function sale()
 {
     return $this->belongsTo(Sale::class);
 }
}
