<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_clocks extends Model
{
     use HasFactory;

    protected $table = 'check_clocks';
    protected $fillable = ['user_id','check_clock_type', 'check_clock_time',];


    public function users()
    {
        return $this->belongsTo(users::class, 'user_id');
    }
}
