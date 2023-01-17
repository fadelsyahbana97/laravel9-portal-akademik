<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_olahragas extends Model
{
    use HasFactory;
    protected $table = 'Student_olahragas';
    protected $fillable = [
        'student_id',
        'olahraga_id',

    ];
}
