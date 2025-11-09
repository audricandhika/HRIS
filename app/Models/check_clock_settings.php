<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_clock_settings extends Model
{
    use HasFactory;

    protected $table = 'check_clock_settings';
    protected $fillable = ['name', 'type'];

    public function check_clock_setting_times()
    {
        return $this->hasMany(check_clock_setting_times::class, 'ck_settings_id');
    }

}
