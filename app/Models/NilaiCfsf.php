<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiCfsf extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bakat()
    {
        return $this->belongsTo(Bakat::class);
    }
    
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
    
    public function level()
    {
        return $this->belongsTo(levelPenilaian::class);
    }
}
