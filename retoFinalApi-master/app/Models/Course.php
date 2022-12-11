<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'numbers_credits',
        'teacher_name',
        'prerequisite_subject',
        'number_hours_autonomous',
        'number_hours_directed',
        'semesters',
    ];

}
