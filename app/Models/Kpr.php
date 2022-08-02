<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpr extends Model
{
    use HasFactory;
    protected $fillable = ['loan_amount','range_time','bank_interest','installment','bank_id'];
    
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
