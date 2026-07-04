<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
    ];
}