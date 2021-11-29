<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Assesment;
use App\Models\KritikSaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Assesment::create([
            'user_id' => 2,
            'name_assesment' => "keluhan1",
            'skor' => 2,
            'keterangan' => "tes",
        ]);

        Assesment::create([
            'user_id' => 2,
            'name_assesment' => "keluhan2",
            'skor' => 100,
            'keterangan' => "awok",
        ]);

        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => "admin",
            'username' => "admin",
            'nim' => 123,
            'jenis_kelamin' => "Laki-laki",
            'alamat' => "selong",
            'tanggal_lahir' => '2021/09/22',
            'spesialis' => "psikolog",
            'detail' => "saya psikolog",
            'role' => "konselor",
            'jenis_konselor' => "psikolog",
            'profile_photo_path' => "konselor",
        ]);

        User::create([
            'name' => "mahasiswa",
            'email' => "mahasiswa@gmail.com",
            'password' => "mahasiswa",
            'username' => "mahasiswa",
            'nim' => 123,
            'jenis_kelamin' => "Laki-laki",
            'alamat' => "selong",
            'tanggal_lahir' => '2021/09/22',
            'spesialis' => "-",
            'detail' => "-",
            'role' => "mahasiswa",
            'jenis_konselor' => "-",
            'profile_photo_path' => "mahasiswa",
        ]);

        KritikSaran::create([
            'kritik_saran' => "lorem asdkflj"
        ]);
    }
}
