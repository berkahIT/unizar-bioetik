<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiApiKonselor extends Controller
{
    // Ambil Semua jadwal konsultasi
    public function all()
    {
        $konsultasi = Konsultasi::where('konselor_id', Auth::user()->id)->get();
        return ResponseFormatter::success([
            'konsultasi' => $konsultasi
        ], 'Data Semua Konsultasi');
    }

    public function konfirmasi(Request $request)
    {
        try {
            $request->validate([
                'id' => ['required'],
                'status' => ['required']
            ]);

            Konsultasi::where(['id' => $request->id])->update([
                'status' => $request->status
            ]);

            return ResponseFormatter::success([
                'message' => 'Berhasil '
            ], 'Berhasil diupdate');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal Konfirmasi Jadwal Konsultasi', 500);
        }
    }
}
