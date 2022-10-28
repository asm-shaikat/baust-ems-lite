<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    protected $fillable =[
        'id', 
        'name',
        'level_term',
        'course_type',
        'course',
        'course1',
        'course2',
        'course3',
        'course4'
    ];
    use HasFactory;
}
