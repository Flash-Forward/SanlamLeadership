<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterWhitelist extends Model
{
    use HasFactory;

    protected $table = 'register_whitelist';


    protected $fillable = [
        'email',
    ];

}
