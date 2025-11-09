<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
 use HasFactory;

    protected $table = 'users';
    protected $fillable = ['email', 'password', 'is_admin'];
    protected $hidden = ['password'];

    public function check_clocks()
    {
        return $this->hasMany(check_clocks::class, 'user_id');
    }

}
