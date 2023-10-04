<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';
    protected $fillable = [
        'user_id', 'judul', 'deskripsi'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
