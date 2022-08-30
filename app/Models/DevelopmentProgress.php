<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentProgress extends Model
{
    use HasFactory;
    protected $fillable = ['step','progress_date','target_completed','start_development','progress','user_id','sale_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
