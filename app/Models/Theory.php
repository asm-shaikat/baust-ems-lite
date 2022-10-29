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
        'course-mid',
        'course-ct',
        'course-assignment',
        'course-attendence',
        'course1',
        'course1-mid',
        'course1-ct',
        'course1-assignment',
        'course1-attendence',
        'course2',
        'course2-mid',
        'course2-ct',
        'course2-assignment',
        'course2-attendence',
        'course3',
        'course3-mid',
        'course3-ct',
        'course3-assignment',
        'course3-attendence',
        'course4',
        'course4-mid',
        'course4-ct',
        'course4-assignment',
        'course4-attendence',
    ];
    use HasFactory;
}
