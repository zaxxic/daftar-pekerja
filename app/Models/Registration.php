<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'vacancie_id','users_id','status','status2'
    ];
    public function Vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'vacancie_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
