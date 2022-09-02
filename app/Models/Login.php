<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable =[
        'email',
        'phone',
        'password',
        'user_type',
    ];
    use HasFactory;
}
