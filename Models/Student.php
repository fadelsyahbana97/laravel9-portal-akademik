<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'students';

    protected $fillable = [
        'nama',
        'gender',
        'nis',
        'class_id',
        'image',
    ];

    // pengerjaan relsi

    public function olahraga()
    {
        return $this->belongsToMany(Olahraga::class, 'student_olahragas', 'student_id', 'olahraga_id');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'class_id', 'id');
    }

}
