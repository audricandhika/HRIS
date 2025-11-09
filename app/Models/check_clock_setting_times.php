<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_clock_setting_times extends Model
{
    use HasFactory;

    protected $table = 'check_clock_setting_times';
    protected $fillable = ['ck_settings_id', 'day', 'clock_in', 'clock_out', 'break_start', 'break_end'];

    public function check_clock_settings()
    {
        return $this->belongsTo(check_clock_settings::class, 'ck_settings_id');
    }
}
