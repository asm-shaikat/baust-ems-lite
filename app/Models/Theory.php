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
        'course_mid',
        'course_ct',
        'course_assignment',
        'course_attendence',
        'course1',
        'course1_mid',
        'course1_ct',
        'course1_assignment',
        'course1_attendence',
        'course2',
        'course2_mid',
        'course2_ct',
        'course2_assignment',
        'course2_attendence',
        'course3',
        'course3_mid',
        'course3_ct',
        'course3_assignment',
        'course3_attendence',
        'course4',
        'course4_mid',
        'course4_ct',
        'course4_assignment',
        'course4_attendence',
    ];
    use HasFactory;
}
