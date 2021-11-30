<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Fungsi untuk login
    public function login(Request $request)
    {
        try {
            $request->validate([
                'username' => ['required'],
                'password' => ['required']
            ]);

            // Cek username dan password
            $credentials = request(['username', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed', 500);
            }

            $user = User::where('username', $request->username)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credincials');
            }

            // Buat Token
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            // Resposer user berhasil login
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    // Fungsi untuk user logout
    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token, 'Token Revoked');
    }

    // Fungsi untuk ambil data user yang sudah login
    public function profile()
    {
        try {
            $user = Auth::user();

            // Response ambil data berhasil
            return ResponseFormatter::success([
                'user' => $user
            ], 'Data User');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Not Found', 404);
        }
    }

    // Fungsi untuk ambil semua konselor
    public function konselor()
    {
        try {
            $konselor = User::where('role', 'konselor')->get();

            // Response untuk ambil data berhasil
            return ResponseFormatter::success([
                'konselor' => $konselor
            ], 'Data Konselor');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Not Found', 404);
        }
    }
}
