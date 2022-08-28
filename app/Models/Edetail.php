<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Edetail extends Model
{
    protected $primaryKey = 'employeesdetailid';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'fathersName',
        'mothersName',
        'nationalID',
        'bloodGrp',
        'previousJob',
        'joiningDate',
        'leavingDate',
        
    ];
    public function Employee(){
        return $this->belongsTo(Employee::class);
    }

    use HasFactory;
}
