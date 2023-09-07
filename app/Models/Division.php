<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = [
        'divisi','status'
     ];

     public function Vacancy()
     {
         return $this->hasMany(Vacancy::class);
     }
     public function User()
     {
         return $this->hasMany(User::class);
     }
}
