<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SelfcareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('self_cares')->insert([
        //     'tanggal' => '22-02-2022',
        //     'waktu' => '08:00',
        //     'lokasi' => 'puskesmas',
        //     'suhu' => '35'            
        // ]);

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 20; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('self_cares')->insert([
                'user_id' => 1,
    			'tanggal' => $faker->date,
    			'waktu' => $faker->time,
    			'lokasi' => $faker->city,
    			'suhu' => $faker->numberBetween(30,40)
    		]);
 
    	}
    }
}
