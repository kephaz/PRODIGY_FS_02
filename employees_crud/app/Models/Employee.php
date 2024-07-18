<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =[
        'first_name', 
        'last_name', 
        'address', 
        'city_id', 
        'state_id', 
        'countary_id', 
        'department_id',
        'zip_code',
        'birth_date',
        'date_hired'
    ];
}
