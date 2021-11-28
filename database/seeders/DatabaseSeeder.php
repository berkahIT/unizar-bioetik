<?php

namespace Database\Seeders;

use App\Models\Assesment;
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
            'jenis' => "wajib",
            'skor' => 2,
            'keterangan' => "tes",
        ]);

        Assesment::create([
            'user_id' => 2,
            'jenis' => "sukarela",
            'skor' => 100,
            'keterangan' => "awok",
        ]);
    }
}
