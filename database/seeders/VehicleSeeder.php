<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            'call_sign' => 'ELW I',
            'type' => 'ELW',
            'type_long' => 'Einsatzleitwagen Inspektionsdienst',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'ELW D',
            'type' => 'ELW',
            'type_long' => 'Einsatzleitwagen Direktionsdienst',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'MZF 1',
            'type' => 'MZF',
            'type_long' => 'Mehrzweckfahrzeug',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'LF 1',
            'type' => 'LF 8/6',
            'type_long' => 'Löschgruppenfahrzeug 8/6',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'HLF 1',
            'type' => 'HLF 20/16',
            'type_long' => 'Hilfeleistungslöschgruppenfahrzeug 20/16',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'GW 1',
            'type' => 'GW-L1',
            'type_long' => 'Gerätewagen Logistik 1',
        ]);
    }
}
