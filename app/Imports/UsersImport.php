<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => Hash::make($row['password']),
            'username' => $row['username'],
            'nim' => $row['nim'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'alamat' => $row['alamat'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'spesialis' => $row['spesialis'],
            'detail' => $row['detail'],
            'role' => $row['role'],
            'jenis_konselor' => $row['jenis_konselor'],
            'profile_photo_path' => $row['profile_photo_path']
        ]);
    }
}
