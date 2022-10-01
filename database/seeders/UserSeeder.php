<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'mark@gmail.com',
            'nik' => '12345',
            'name' => 'mark',
            'password' => Hash::make('12345'),
        ]);
    }
}
