<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;
    protected $table = 'keterangan';
    protected $fillable = ['keterangan'];

    public function kriteria()
    {
        return $this->hasOne(Kriteria::class);
    }

    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }
}
