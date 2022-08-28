<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model
{
    protected $primaryKey  = 'employeesid';
    public $incrementing  = false;

    protected $fillable =[
        'id',
        'em_id',
        'name',
        'email',
        'phone',
        'post',
        'eDept',
        'education',
        'active',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    // One to one
    public function Edetail(){
        return $this->hasOne(Edetail::class,'em_id','id');
    }


    
    use HasFactory;
}
