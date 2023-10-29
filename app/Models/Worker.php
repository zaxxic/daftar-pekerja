<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id','divisi','posisi'
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
