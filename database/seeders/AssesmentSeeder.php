<?php

namespace Database\Seeders;

use App\Models\Assesment;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AssesmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assesment::create([
            'user_id' => Str::random(10),
            'jenis' => Str::random(10) . '@gmail.com',
            'skor' => Str::random(10) . '@gmail.com',
            'keterangan' => Str::random(10) . '@gmail.com',
        ]);
    }
}
