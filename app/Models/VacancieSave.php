<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancieSave extends Model
{
    use HasFactory;
    protected $table = "vacancie_saves";
    protected $fillable = ['user_id', 'vacancie_id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'vacancie_id');
    }
}
