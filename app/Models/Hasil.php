<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'hasil';
    protected $fillable = ['keterangan_id', 'kriteria_id', 'bobot_id', 'dataNilai_id'];

    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function bobot()
    {
        return $this->belongsTo(Bobot::class);
    }

    public function dataNilai()
    {
        return $this->belongsTo(DataNilai::class);
    }
}
