<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelfcareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('self_cares')->insert([
            'tanggal' => '22-02-2022',
            'waktu' => '08:00',
            'lokasi' => 'puskesmas',
            'suhu' => '35'            
        ]);
    }
}
