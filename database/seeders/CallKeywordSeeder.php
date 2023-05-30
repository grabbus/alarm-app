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
        /** Brand **/
        /** B 1 **/
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Brandgeruch',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Rauchentwicklung',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Freifläche klein (< 100 m²)',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Abfall-, Müll-, Papiercontainer',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Freien',
            'catchword' => 'Kleinbrand',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'im Gebäude',
            'catchword' => 'Nachschau',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'category' => 'Verkehr',
            'catchword' => 'Motorrad',
            'requirement' => '1 Trupp',
        ]);
        /** B 2 **/
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Wald, klein (< 1000 m²)',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Freifläche groß (> 100 m²)',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Bahndamm',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Bau-, Wohncontainer',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte, Schuppen',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Bahndamm',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Gebäude',
            'catchword' => 'Kamin',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Gebäude',
            'catchword' => 'überhitzter Ofen / Ölofen',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Verkehr',
            'catchword' => 'PKW auf BAB',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus innerorts',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 2',
            'requirement' => '1 Staffel, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'im Freien',
            'catchword' => 'Bau-, Wohncontainer (Person in Gefahr)',
            'requirement' => '1 Gruppe, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte / Schuppen (Person in Gefahr',
            'requirement' => '1 Gruppe, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'im Freien',
            'catchword' => 'Person',
            'requirement' => '1 Gruppe, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'PKW (Person in Gefahr)',
            'requirement' => '1 Gruppe, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'PKW auf BAB (Person in Gefahr)',
            'requirement' => '1 Gruppe, 1000 l Löschwasser, 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 2 Person',
            'requirement' => '1 Gruppe, 1000 l Löschwasser, 4 PA',
        ]);
    }
}
