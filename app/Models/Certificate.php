<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificates';
    protected $fillable = [
        'user_id', 'judul', 'deskripsi', 'foto'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
