<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;

    public function jurusan() : BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function matakuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'pivots', 'mahasiswa_id', 'mata_kuliah_id');
    }
}
