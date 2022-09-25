<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    

    protected $fillable = [
        'id', 
        'name',
        'dept',
        'dept_id',
        'batch',
        'level',
        'term', 
        'f_name', 
        'f_phone', 
        'm_name',
        'm_phone', 
        'b_date', 
        'b_id', 
        'religion',
        'gender', 
        'blood', 
        's_phone', 
        'permanent_address',
        'present_address', 
        'email', 
        'password',
        'user_type',
        'active',
        'concatanate',
    ];
    
    use HasFactory;
}
