<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    public function kelass()
    {
        return $this->hasOne(kelas::class, 'guru_id', 'id');
    }

    //many to one
    //  public function guyu()
    //  {
    //      return $this->belongsTo(Guru::class, 'guru_id', 'id');
    //  }

}
