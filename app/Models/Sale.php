<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['name','payment_type','transaction_date','ktp','npwp','status','user_id','housing_id','lot_id'];

    public function housing()
    {
        return $this->belongsTo(Housing::class);
    }
    public function lot()
    {
        return $this->belongsTo(Lot::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
