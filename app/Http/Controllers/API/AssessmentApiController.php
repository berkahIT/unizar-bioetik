<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Assesment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentApiController extends Controller
{
    //Ambil semua data assessment user
    public function all()
    {
        try {

            $user = Auth::user();

            $assessment = Assesment::where('user_id', $user->id)->get();

            return ResponseFormatter::success([
                'assessment' => $assessment,
                'user' => $user
            ], 'Data all assessment');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal mendapatkan Data Assessment', 500);
        }
    }

    // Simpan data assessment
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name_assesment' => ['required'],
                'skor' => ['required'],
                'keterangan' => ['required']
            ]);

            // Simpan data
            $user = Auth::user();

            Assesment::create([
                'user_id' => $user->id,
                'name_assesment' => $request->name_assesment,
                'skor' => $request->skor,
                'keterangan' => $request->keterangan
            ]);

            return ResponseFormatter::success([
                'message' => 'Skor assessment berhasil disimpan'
            ], 'Berhasil disimpan');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal save assessment', 500);
        }
    }
}
