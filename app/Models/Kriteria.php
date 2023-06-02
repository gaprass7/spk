<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria';
    protected $fillable = ['kode', 'kriteria', 'keterangan_id'];

    public function bobot()
    {
        return $this->hasOne(Bobot::class);
    }

    public function dataNilai()
    {
        return $this->hasOne(DataNilai::class);
    }

    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }

    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class);
    }
}
