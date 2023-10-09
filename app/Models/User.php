<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'alamat',
        'jenis_kelamin',
        'no_telp',
        'cv',
        'lamaran',
        'foto',
        'status',
        'tanggal_wawancara',
        'password',
        'lokasi_wawancara',
        'devision_id',
        'deskripsi',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function message()
    {
        return $this->hasMany(Message::class);
    }
    public function Devision()
    {
        return $this->belongsTo(Division::class, 'devision_id');
    }
    public function Registration()
    {
        return $this->hasMany(Registration::class);
    }
    public function Rejected()
    {
        return $this->hasMany(Rejected::class);
    }
    public function Skill()
    {
        return $this->hasMany(Skill::class);
    }
    public function Certificate()
    {
        return $this->hasMany(Certificate::class);
    }
    public function School()
    {
        return $this->hasMany(School::class);
    }
    public function Experience()
    {
        return $this->hasMany(Experience::class);
    }
}
