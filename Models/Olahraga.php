<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olahraga extends Model
{
    use HasFactory;
    protected $table = 'olahragas';

    protected $fillable = [
        'nama',
        'student_id',

    ];

    public function student()
    {
        return $this->belongsToMany(Student::class, 'student_olahragas', 'olahraga_id', 'student_id');
    }

}
