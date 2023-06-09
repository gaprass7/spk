<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;
    protected $table = 'bobot';
    protected $fillable = ['bobot', 'kriteria_id'];

    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
