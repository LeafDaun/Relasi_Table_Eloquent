<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'pivots','mata_kuliah_id','mahasiswa_id');
    }
}
