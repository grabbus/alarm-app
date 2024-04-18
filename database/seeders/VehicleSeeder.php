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
            'call_sign' => 'MZF 1-11-1',
            'type' => 'MZF',
            'type_long' => 'Mehrzweckfahrzeug',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'LF 1-42-1',
            'type' => 'LF 8/6',
            'type_long' => 'Löschgruppenfahrzeug 8/6 THL',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'LF 1-43-1',
            'type' => 'LF 8/6',
            'type_long' => 'Löschgruppenfahrzeug 8/6',
            'organization' => 'FW',
        ]);
        DB::table('vehicles')->insert([
            'call_sign' => 'GW 1-55-1',
            'type' => 'GW-L1',
            'type_long' => 'Gerätewagen Logistik 1',
            'organization' => 'FW',
        ]);
    }
}
