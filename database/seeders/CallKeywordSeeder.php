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
    /** Stichwörter Brand */
    /** B 1 */
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
            'catchword' => 'Freifläche klein (<100 m²)',
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
        /** B 2 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Wald, klein (< 1000 m²)',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Freifläche groß (> 100 m²)',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Bahndamm',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Bau-, Wohncontainer',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte, Schuppen',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Gebäude',
            'catchword' => 'Kamin',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'im Gebäude',
            'catchword' => 'überhitzter Ofen / Ölofen',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Verkehr',
            'catchword' => 'PKW',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Verkehr',
            'catchword' => 'PKW auf BAB',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus innerorts',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 2',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        /** B 2 PERSON */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'im Freien',
            'catchword' => 'Bau-, Wohncontainer (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte / Schuppen (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'im Freien',
            'catchword' => 'Person',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'PKW (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'PKW auf BAB (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 2 Person',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        /** B 3 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Freien',
            'catchword' => 'am Gebäude',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Brandgeruch',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Dachstuhl',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Dehnfuge',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Garage',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Keller',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Rauchentwicklung',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'Zimmer',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'Landwirtschaft',
            'catchword' => 'Fahrzeug / Maschine',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus außerorts ',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus auf BAB',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 3',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'category' => 'im Gebäude',
            'catchword' => 'überhitzter Heustock',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        /** B 3 PERSON */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'im Gebäude',
            'catchword' => 'Dachstuhl (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'im Gebäude',
            'catchword' => 'Garage (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'im Gebäude',
            'catchword' => 'Keller (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'im Gebäude',
            'catchword' => 'Rauchentwicklung (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'im Gebäude',
            'catchword' => 'Zimmer (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'LKW (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'LKW auf BAB (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 3 Person',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        /** B 4 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 4',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 4',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B 5 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 5',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 5',
            'requirement' => '6 Gruppen / 5000 l Löschwasser / 16 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B 6 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 6',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 6',
            'requirement' => '8 Gruppen / 6000 l Löschwasser / 20 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B 7 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 7',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 7',
            'requirement' => '10 Gruppen / 7000 l Löschwasser / 24 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B 8 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 8',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 8',
            'requirement' => '12 Gruppen / 8000 l Löschwasser / 28 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B BMA */
        DB::table('call_keywords')->insert([
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Brandmeldeanlage',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Rauchwarnmelder über Hausnotruf',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Rauchwarnmelder',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA',
        ]);

        /** Stichwörter Technische Hilfeleistung */
        DB::table('call_keywords')->insert([
            'keyword' => 'THL BELEUCHTUNG',
            'category' => 'klein',
            'catchword' => 'Einsatzstelle ausleuchten',
            'requirement' => '1 Trupp / Beleuchtungssatz',
        ]);

        /** Stichwörter ABC */
        DB::table('call_keywords')->insert([
            'keyword' => 'ABC 1',
            'category' => 'Geruch',
            'catchword' => 'undefinierbarer Geruch',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA / 1 Ex-Warngerät',
        ]);

        /** Stichwörter Sonstige */
        DB::table('call_keywords')->insert([
            'keyword' => 'SON BELEUCHTUNG',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);

        /** Stichwörter Info */
        DB::table('call_keywords')->insert([
            'keyword' => 'INF ABNAHME BMA',
            'category' => 'BMA',
            'catchword' => 'Abnahme BMA',
            'requirement' => null,
        ]);
    }
}
