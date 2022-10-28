<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessional extends Model
{
    protected $fillable =[
        'id', 
        'name',
        'level_term',
        'course_type',
        'sessional',
        'sessional1',
        'sessional2',
        'sessional3',
        'sessional4'
    ];
    use HasFactory;
}
