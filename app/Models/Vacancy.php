<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = uuid_create(UUID_TYPE_RANDOM);
        });
    }

    protected $fillable = [
        'judul','devisi_id','batas','pekerja','slot','gaji','tipe','lokasi','syarat', 'status', 'pembuat'
    ];
    public function Division()
    {
        return $this->belongsTo(Division::class, 'devisi_id');
    }
    public function Registration()
    {
        return $this->hasMany(Registration::class);
    }
}
