<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Vacancy extends Model
{
    use HasFactory,SoftDeletes;
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
    protected $enumCasts = [
        'status' => 'enum:aktif,nonaktif',
    ];

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
    public function Rejected()
    {
        return $this->hasMany(Rejected::class);
    }
    public function VacancySave()
    {
        return $this->hasMany(VacancieSave::class);
    }
}
