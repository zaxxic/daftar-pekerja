<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','registration_id'
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Registration()
    {
        return $this->belongsTo(Registration::class, 'registration_id');
    }
}
