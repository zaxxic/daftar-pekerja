<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','Tempat','JenisPekerjaan','NamaProjek','DetailProjek','WaktuPengerjaan','Bukti'
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
