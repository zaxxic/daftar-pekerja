<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rejected extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','pesan','divisi','posisi','status'
    ];
    public function Vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'vacancies_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
