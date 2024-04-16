<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Feuerwehr Ezelsdorf',
            'email' => 'ezelsdorf@els.de',
            'email_verified_at' => now(),
            'password' => Hash::make('131-bf-tag-2024')
        ]);
        DB::table('users')->insert([
            'name' => 'Feuerwehr Burgweinting',
            'email' => 'burgweinting@els.de',
            'email_verified_at' => now(),
            'password' => Hash::make('')
        ]);
    }
}
