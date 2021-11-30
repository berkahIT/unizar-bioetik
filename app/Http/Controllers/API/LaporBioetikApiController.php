<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Bioetik;
use App\Models\KritikSaran;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporBioetikApiController extends Controller
{
    // Lapor bioetik untuk mahasiswa
    public function mahasiswa(Request $request)
    {
        try {
            $request->validate([
                'masalah' => ['required']
            ]);

            $user = Auth::user();

            Bioetik::create([
                'name' => $user->name,
                'nim' => $user->nim,
                'masalah' => $request->masalah,
                'status' => 'PANDING'
            ]);

            return ResponseFormatter::success([
                'message' => 'Lapor Bioetik Berhasil di POST'
            ], 'Berhasil POST');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal POST', 500);
        }
    }

    // Lapor Bioetik untuk Konselor
    public function konselor(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required'],
                'nim' => ['required'],
                'masalah' => ['required']
            ]);

            Bioetik::create([
                'name' => $request->name,
                'nim' => $request->nim,
                'masalah' => $request->masalah,
                'status' => 'PANDING'
            ]);

            return ResponseFormatter::success([
                'message' => 'Lapor Bioetik Berhasil di POST'
            ], 'Berhasil POST');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal POST', 500);
        }
    }

    // Keritik dan saran
    public function keritiksaran(Request $request)
    {
        try {
            $request->validate([
                'kritik_saran' => ['required'],
            ]);

            KritikSaran::create([
                'kritik_saran' => $request->kritik_saran,
            ]);

            return ResponseFormatter::success([
                'message' => 'Keritik dan Saran Berhasil di POST'
            ], 'Berhasil POST');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal POST', 500);
        }
    }
}
