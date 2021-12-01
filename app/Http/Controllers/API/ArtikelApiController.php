<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Exception;
use Illuminate\Http\Request;

class ArtikelApiController extends Controller
{
    public function all()
    {
        try {
            $artikel = Artikel::where('is_show', true)->get();

            return ResponseFormatter::success([
                'artikel' => $artikel
            ]);
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'error' => $error
            ], 'Gagal mendapatkan POST');
        }
    }
}
