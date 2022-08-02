<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = ['blok','surface_area','price','type','housing_id'];


    public function housing()
    {
        return $this->belongsTo(Housing::class);
    }

}
