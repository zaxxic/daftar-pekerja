<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','NamaSekolah','Jurusan','TanggalAwal','TanggalAkhir','Tingkatan'
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
