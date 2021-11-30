<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'konselor_id',
        'rekam_medik',
        'rekam_medik_id',
        'tanggal',
        'jam',
        'jenis_konsultasi',
        'photo_rekam_medik',
        'status'
    ];

    public function mahasiswa(){
        return $this->belongsTo(User::class,'mahasiswa_id','id');
    }

    public function konselor(){
        return $this->belongsTo(User::class,'konselor_id','id');
    }
}
