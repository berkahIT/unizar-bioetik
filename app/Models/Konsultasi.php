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
        'rekam_medik_id',
        'tanggal',
        'jenis_konsultasi',
        'status'
    ];
}
