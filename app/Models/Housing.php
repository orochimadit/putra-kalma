<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','location','type','amount','technical_specifications','surface_area'];
}
