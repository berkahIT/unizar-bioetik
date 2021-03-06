<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'nim',
        'jenis_kelamin',
        'alamat',
        'tanggal_lahir',
        'spesialis',
        'detail',
        'role',
        'jenis_konselor',
        'profile_photo_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rekam_medik(){
        return $this->hasMany(RekamMedik::class,'user_id','id');
    }

    public function mahasiswa(){
        return $this->hasMany(Konsultasi::class,'mahasiswa_id','id');
    }

    public function konselor(){
        return $this->hasMany(Konsultasi::class,'konselor_id','id');
    }
}
