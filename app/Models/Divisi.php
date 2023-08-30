<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $fillable = [
       'divisi'
    ];

    public function Lowongan()
    {
        return $this->hasMany(Lowongan::class);
    }
}
