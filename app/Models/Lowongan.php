<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    // protected $table = 'lowongans';
    protected $fillable = [
        'judul','devisi_id','batas','pekerja','slot','gaji','tipe','lokasi','syarat','pembuat'
    ];
    public function Divisi()
    {
        return $this->belongsTo(Divisi::class, 'Devisi_id');
    }
}
