<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul','devisi_id','batas','pekerja','slot','gaji','tipe','lokasi','syarat', 'status', 'pembuat'
    ];
    public function Division()
    {
        return $this->belongsTo(Division::class, 'devisi_id');
    }
    public function Registration()
    {
        return $this->hasMany(Registration::class);
    }
}
