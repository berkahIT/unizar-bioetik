<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiMahasiswaController extends Controller
{
    //Get All Konsultasi
    public function all()
    {
        try {
            $konsultasi = Auth::user();
            return ResponseFormatter::success([
                'konsultasi' => $konsultasi->mahasiswa
            ]);
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal Mendapatkan Data Konsultasi', 500);
        }
    }

    // Buat Konsultasi
    public function store(Request $request)
    {
        try {
            $request->validate([
                'konselor_id' => ['required'],
                'jenis_konsultasi' => ['required'],
                'tanggal' => ['required'],
                'jam' => ['required']
            ]);

            $user = Auth::user();

            $data = Konsultasi::create([
                'mahasiswa_id' => $user->id,
                'konselor_id' => $request->konselor_id,
                'jenis_konsultasi' => $request->jenis_konsultasi,
                'tanggal' => $request->tanggal,
                'jam' => $request->jam
            ]);

            return ResponseFormatter::success([
                'data' => $data
            ], 'Jadwal berhasil dibuat');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal Membuat Jadwal Konsultasi', 500);
        }
    }
}
