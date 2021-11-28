<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedik extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'konsultasi_id',
        'photo_rekam_medik',
        'tanggal'
    ];
}
