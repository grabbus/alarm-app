<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CallKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Straße reinigen',
            'requirement' => 'FW EL - 1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Brandmeldeanlage',
            'requirement' => '500 l Löschwasser, 4 PA - 1 Staffel',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 3',
            'category' => 'Rettung',
            'catchword' => 'Waldunfall mit eingeklemmter Person',
            'requirement' => '2 Rettungssätze, 500 l Löschwasser, FW-EL, Fachberater THW - 2 Staffeln',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Kindergarten',
            'requirement' => '3200 l Löschwasser, 12 PA, 1 Wärmebild-kamera, DL, FW-EL, Fachberater THW - 4 Gruppen',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte, Schuppen',
            'requirement' => '1000 l Löschwasser, 4 PA - 1 Staffel',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL ERKUNDUNG',
            'category' => 'klein',
            'catchword' => 'Erkundung',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'PKW (Person in Gefahr)',
            'requirement' => '1000 l Löschwasser, 4 PA - 1 Gruppe',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 1',
            'category' => 'Rettung',
            'catchword' => 'Personensuche',
            'requirement' => 'FW-EL - 1 Trupp',
        ]);
        /** Sonstige Einsätze */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Abfall-, Müll-, Papiercontainer',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Nachschau',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Gebäude',
            'catchword' => 'Nachschau',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Baum auf Straße',
            'requirement' => 'FW-EL - 1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 1',
            'category' => 'VU',
            'catchword' => 'mit PKW',
            'requirement' => 'FW-EL - 1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 1',
            'category' => 'VU',
            'catchword' => 'mit Motorrad',
            'requirement' => 'FW-EL - 1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Verkehrslenkung',
            'requirement' => 'FW-EL - 1 Trupp',
        ]);
    }
}
