<?php

namespace Database\Seeders;

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
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'ELW D',
            'type' => 'ELW',
            'type_long' => 'Einsatzleitwagen Direktionsdienst',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'MZF 1',
            'type' => 'MZF',
            'type_long' => 'Mehrzweckfahrzeug',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'LF 1',
            'type' => 'LF 8/6',
            'type_long' => 'Löschgruppenfahrzeug 8/6',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'HLF 1',
            'type' => 'HLF 20/16',
            'type_long' => 'Hilfeleistungslöschgruppenfahrzeug 20/16',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'GW 1',
            'type' => 'GW-L1',
            'type_long' => 'Gerätewagen Logistik 1',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'RTW 1',
            'type' => 'RTW',
            'type_long' => 'Rettungstransportwagen',
            'organization' => 'RD',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'FR 1',
            'type' => 'FR',
            'type_long' => 'First Responder',
            'organization' => 'RD',
        ]);
    }
}
