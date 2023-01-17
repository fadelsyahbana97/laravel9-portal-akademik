<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kelas extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'class';

    protected $fillable = [
        'name',
        'guru_id',
        'nama',
        'image',
    ];

    // one to many
    public function stud()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }

    //many to one
    public function guyu()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
