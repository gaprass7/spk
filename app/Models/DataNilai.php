<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNilai extends Model
{
    use HasFactory;
    
    protected $table = 'dataNilai';
    protected $fillable = ['nama', 'kriteria_id', 'nilai1', 'nilai2', 'nilai3', 'nilai4', 'nilai5'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
