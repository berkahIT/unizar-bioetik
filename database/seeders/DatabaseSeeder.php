<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Assesment;
use App\Models\Konselor;
use App\Models\KritikSaran;
use App\Models\Mahasiswa;
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
            'user_id' => 1,
            'nama' => "wajib",
            'skor' => 2,
            'keterangan' => "tes",
        ]);

        Assesment::create([
            'user_id' => 1,
            'nama' => "sukarela",
            'skor' => 100,
            'keterangan' => "awok",
        ]);

        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => "admin",
        ]);

        Konselor::create([
            'nama' => "dosen1",
            'username' => "dosen1",
            'passwords' => "dosen1",
            'nidn' => 123,
            'email' => "dosen@gmail.com",
            'jenis_kelamin' => "Laki-laki",
            'tanggal' => '2021/09/22'
        ]);

        Konselor::create([
            'nama' => "dosen2",
            'username' => "dosen2",
            'passwords' => "dosen2",
            'nidn' => 321,
            'email' => "dosen2@gmail.com",
            'jenis_kelamin' => "Perempuan",
            'tanggal' => '2021/09/22'
        ]);

        Mahasiswa::create([
            'nama' => "mahasiswa1",
            'username' => "mahasiswa1",
            'passwords' => "mahasiswa1",
            'nim' => 123,
            'email' => "mahasiswa@gmail.com",
            'jenis_kelamin' => "Laki-laki",
            'tanggal' => '2021/09/22'
        ]);

        Mahasiswa::create([
            'nama' => "mahasiswa2",
            'username' => "mahasiswa2",
            'passwords' => "mahasiswa2",
            'nim' => 321,
            'email' => "mahasiswa2@gmail.com",
            'jenis_kelamin' => "Perempuan",
            'tanggal' => '2021/09/22'
        ]);

        KritikSaran::create([
            'kritik_saran' => "lorem asdkflj",
            'tanggal' => '2021/09/22'
        ]);
    }
}
