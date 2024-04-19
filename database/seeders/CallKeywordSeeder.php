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
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Brandgeruch',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Rauchentwicklung',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Freifläche klein (<100 m²)',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Abfall-, Müll-, Papiercontainer',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Kleinbrand',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Nachschau',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 1',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'Motorrad',
            'requirement' => '1 Trupp',
        ]);
        /** B 2 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Wald, klein (< 1000 m²)',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Freifläche groß (> 100 m²)',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Bahndamm',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Bau-, Wohncontainer',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte, Schuppen',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Kamin',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'überhitzter Ofen / Ölofen',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'PKW',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'PKW auf BAB',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus innerorts',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 2',
            'requirement' => '1 Staffel / 1000 l Löschwasser / 4 PA',
        ]);
        /** B 2 PERSON */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Bau-, Wohncontainer (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Gartenhütte / Schuppen (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'Person',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'PKW (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2 PERSON',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'PKW auf BAB (Person in Gefahr)',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 2',
            'type' => 'Brand',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 2 Person',
            'requirement' => '1 Gruppe / 1000 l Löschwasser / 4 PA',
        ]);
        /** B 3 */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Freien',
            'catchword' => 'am Gebäude',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Brandgeruch',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Dachstuhl',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Dehnfuge',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Garage',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Keller',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Rauchentwicklung',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Zimmer',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'Landwirtschaft',
            'catchword' => 'Fahrzeug / Maschine',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus außerorts ',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'Verkehr',
            'catchword' => 'LKW / Bus auf BAB',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 3',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'überhitzter Heustock',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        /** B 3 PERSON */
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Dachstuhl (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Garage (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Keller (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Rauchentwicklung (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'keyword' => 'B 3 PERSON',
            'type' => 'Brand',
            'category' => 'im Gebäude',
            'catchword' => 'Zimmer (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 3 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'LKW (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 3 PERSON',
            'category' => 'Verkehr',
            'catchword' => 'LKW auf BAB (Person in Gefahr)',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 3 PERSON',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 3 Person',
            'requirement' => '2 Gruppen / 1600 l Löschwasser / 8 PA, 1 Wärmebildkamera',
        ]);
        /** B 4 */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'im Gebäude',
            'catchword' => 'ausgedehnt / hoch bis 6. OG',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'im Gebäude',
            'catchword' => 'Tiefgarage',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Wohnheim',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Behinderteneinrichtung',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Hochhaus ab 7. OG',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Supermarkt',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Kindergarten',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Kino',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Kirche',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Schule',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Theater',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Zirkus',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Hotel',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'Sägewerk / Schreinerei',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'Lagerhalle',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'Silo (kein Gefahrstoff)',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'große Höhe – Turm',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'große Höhe – Windrad',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'Industriegebäude',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Landwirtschaft',
            'catchword' => 'Bauernhof',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Landwirtschaft',
            'catchword' => 'Stall / Scheune',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Landwirtschaft',
            'catchword' => 'Aussiedlerhof',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 4',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 4',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera / DL / FW-EL / Fachberater THW',
        ]);
        /** B 5 */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 5',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Pflege-/Altenheim',
            'requirement' => '6 Gruppen / 5000 l Löschwasser / 16 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 5',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Kaufhaus',
            'requirement' => '6 Gruppen / 5000 l Löschwasser / 16 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 5',
            'category' => 'Gebäude hohe Personenzahl',
            'catchword' => 'Krankenhaus',
            'requirement' => '6 Gruppen / 5000 l Löschwasser / 16 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 5',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 5',
            'requirement' => '6 Gruppen / 5000 l Löschwasser / 16 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B Sonstiges */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B BOOT',
            'category' => 'Verkehr',
            'catchword' => 'Boot / Yacht / Floß',
            'requirement' => '1 Gruppe / 4 PA / 1 Boot',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ELEKTROANLAGE',
            'category' => 'Gewerbe / Industrie',
            'catchword' => 'Elektroanlage / Trafo',
            'requirement' => '2 Staffeln / 1600 l Löschwasser / 6 PA',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B SCHIENENTUNNEL',
            'category' => 'Verkehr',
            'catchword' => 'Zug im Tunnel',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B SCHIENENTUNNEL',
            'category' => 'Verkehr',
            'catchword' => 'S-Bahn im Tunnel',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B SCHIENENTUNNEL',
            'category' => 'Verkehr',
            'catchword' => 'U-Bahn im Tunnel',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B SCHIFF',
            'category' => 'Verkehr',
            'catchword' => 'Passagierschiff',
            'requirement' => '2 Gruppen / 8 PA, 1 Wärmebildkamera, 2 Boote, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B SCHIFF',
            'category' => 'Verkehr',
            'catchword' => 'Frachtschiff',
            'requirement' => '2 Gruppen / 8 PA, 1 Wärmebildkamera, 2 Boote, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B TUNNEL',
            'category' => 'Verkehr',
            'catchword' => 'Tunnel',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B WALD',
            'category' => 'im Freien',
            'catchword' => 'Wald groß (> 1000m²)',
            'requirement' => '4 Gruppen / 6000 l Löschwasser / 4 PA, Druckschlaucheinheit, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B WALD',
            'category' => 'im Freien',
            'catchword' => 'Bergwald',
            'requirement' => '4 Gruppen / 6000 l Löschwasser / 4 PA, Druckschlaucheinheit, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ZUG',
            'category' => 'Verkehr',
            'catchword' => 'Personenzug',
            'requirement' => '3 Gruppen / 5000 l Löschwasser / 8 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ZUG',
            'category' => 'Verkehr',
            'catchword' => 'Güterzug',
            'requirement' => '3 Gruppen / 5000 l Löschwasser / 8 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ZUG',
            'category' => 'Verkehr',
            'catchword' => 'Zug nur Lokomotive',
            'requirement' => '3 Gruppen / 5000 l Löschwasser / 8 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ZUG',
            'category' => 'Verkehr',
            'catchword' => 'Straßenbahn',
            'requirement' => '3 Gruppen / 5000 l Löschwasser / 8 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ZUG',
            'category' => 'Verkehr',
            'catchword' => 'U-Bahn im Freien',
            'requirement' => '3 Gruppen / 5000 l Löschwasser / 8 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B ZUG',
            'category' => 'Verkehr',
            'catchword' => 'S-Bahn im Freien',
            'requirement' => '3 Gruppen / 5000 l Löschwasser / 8 PA, 1 Wärmebildkamera, FW-EL, Fachberater THW',
        ]);

        /** Stichwörter THL */
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL AMOK FW',
            'category' => 'Bombe / Amok',
            'catchword' => 'Amoklage',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL BELEUCHTUNG',
            'category' => 'klein',
            'catchword' => 'Einsatzstelle ausleuchten',
            'requirement' => 'Beleuchtungssatz',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL BOMBENDROHUNG',
            'category' => 'Bombe / Amok',
            'catchword' => 'Bombendrohung',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL BOMBENFUND',
            'category' => 'Bombe / Amok',
            'catchword' => 'Bombenfund',
            'requirement' => '1 Staffel / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL ERKUNDUNG',
            'category' => 'klein',
            'catchword' => 'Erkundung',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL FIRST RESPONDER',
            'category' => 'RD',
            'catchword' => 'First Responder',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL GEBÄUDEEINSTURZ',
            'category' => 'Einsturz / Umsturz',
            'catchword' => 'Gebäude eingestürzt',
            'requirement' => '3 Gruppen / 3 Rettungssätze / Rettungsplattform / 4000 l Löschwasser, FW-EL, Fachberater THW, THW SEG',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL GROßTIERRETTUNG',
            'category' => 'Tier',
            'catchword' => 'Rettung Großtier (z. B. Kuh, Pferd)',
            'requirement' => '1 Staffel',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL HUBSCHRAUBERLANDUNG',
            'category' => 'Rettung',
            'catchword' => 'Hubschrauberlandung sichern',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P AUFZUG',
            'category' => 'Rettung',
            'catchword' => 'Aufzug öffnen akut',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'Person droht zu springen',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'Person absturzgefährdet',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'Person in Höhe',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'Person aus Tiefe / Schacht',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'schwergewichtiger Patient',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'Person auf Windrad / Kran',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P RETTUNG H / T',
            'category' => 'Absturz / Höhe',
            'catchword' => 'Paraglider / Fallschirmspringer / Drachenflieger abgestürzt',
            'requirement' => '1 Gruppe / Gerätesatz Absturzsicherung / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P STRAßENBAHN',
            'category' => 'VU',
            'catchword' => 'Person unter Straßenbahn',
            'requirement' => '2 Gruppen / 2 Rettungssätze / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P STRAßENBAHN',
            'category' => 'VU',
            'catchword' => 'Straßenbahn',
            'requirement' => '2 Gruppen / 2 Rettungssätze / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P STROM',
            'category' => 'Rettung',
            'catchword' => 'Person Stromunfall',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P U-BAHN',
            'category' => 'VU',
            'catchword' => 'Person unter U-Bahn',
            'requirement' => '2 Gruppen / 2 Rettungssätze / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P VERSCHÜTTET',
            'category' => 'Rettung',
            'catchword' => 'Person verschüttet / Tiefbauunfall',
            'requirement' => '1 Gruppe / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P VERSCHÜTTET',
            'category' => 'Rettung',
            'catchword' => 'Person in Silo',
            'requirement' => '1 Gruppe / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P EINGESCHLOSSEN',
            'category' => 'Rettung',
            'catchword' => 'Wohnung öffnen akut',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P EINGESCHLOSSEN',
            'category' => 'Rettung',
            'catchword' => 'Fahrzeug öffnen akut',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P ZUG',
            'category' => 'VU',
            'catchword' => 'Person unter Zug',
            'requirement' => '2 Gruppen / 2 Rettungssätze / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P ZUG',
            'category' => 'VU',
            'catchword' => 'Person unter S-Bahn',
            'requirement' => '2 Gruppen / 2 Rettungssätze / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL P ZUG',
            'category' => 'VU',
            'catchword' => 'Person vom Zug erfasst',
            'requirement' => '2 Gruppen / 2 Rettungssätze / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL RETTUNGSKORB',
            'category' => 'RD',
            'catchword' => 'Drehleiter',
            'requirement' => '1 Trupp / Drehleiter',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'allgemein',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Baum auf Straße',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Baum auf Schiene',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Dach räumen',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Fahrzeug öffnen',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Fahrzeug sichern',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Wohnung öffnen',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Gebäude sichern',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Gegenstand / Teil sichern',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Straße reinigen',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Straße überschwemmt',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Wasser im Keller',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Wasser in Gebäude',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'RD',
            'catchword' => 'Unterstützung',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'Rettung',
            'catchword' => 'Personensuche',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'VU',
            'catchword' => 'mit Motorrad',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'VU',
            'catchword' => 'mit PKW',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'Tier',
            'catchword' => 'Rettung Kleintier',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'Tier',
            'catchword' => 'Bergung Kleintier',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'Tier',
            'catchword' => 'Bergung Großtier (z. B. Kuh, Pferd)',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'Rettung',
            'catchword' => 'Waldunfall ohne eingeklemmte Person',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 1',
            'category' => 'klein',
            'catchword' => 'Verkehrslenkung',
            'requirement' => '1 Trupp / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 2',
            'category' => 'VU',
            'catchword' => 'mehrere PKW',
            'requirement' => '1 Staffel / 1 Rettungssatz / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 2',
            'category' => 'VU',
            'catchword' => 'LKW / Bus (leer), ohne eingeklemmte Personen',
            'requirement' => '1 Staffel / 1 Rettungssatz / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'Rettung',
            'catchword' => 'Person eingeklemmt (nicht VU)',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'VU',
            'catchword' => '1 oder 2 PKW, Person eingeklemmt',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'VU',
            'catchword' => 'Bus (besetzt)',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'Einsturz / Umsturz',
            'catchword' => 'Gerüst umgestürzt',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'Einsturz / Umsturz',
            'catchword' => 'Stromleitungsmast umgestürzt',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'Kran / Umsturz',
            'catchword' => 'Gerüst umgestürzt',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 3',
            'category' => 'Rettung',
            'catchword' => 'Waldunfall mit eingeklemmter Person',
            'requirement' => '2 Staffeln / 2 Rettungssatz / 500 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 4',
            'category' => 'VU',
            'catchword' => 'mehrere PKW, Personen eingeklemmt',
            'requirement' => '3 Gruppen / 3 Rettungssatz / 2000 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 4',
            'category' => 'VU',
            'catchword' => 'LKW / Bus (leer), Person eingeklemmt',
            'requirement' => '3 Gruppen / 3 Rettungssatz / Rettungsplattform / 2000 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 5',
            'category' => 'VU',
            'catchword' => 'Massenkarambolage, Personen eingeklemmt',
            'requirement' => '4 Gruppen / 4 Rettungssatz / Zugeinrichtung / 4000 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 5',
            'category' => 'VU',
            'catchword' => 'Bus besetzt mit eingeklemmten Personen',
            'requirement' => '4 Gruppen / 4 Rettungssatz / Zugeinrichtung / 4000 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL 5',
            'category' => 'VU',
            'catchword' => 'mehrere LKW mit eingeklemmten Personen',
            'requirement' => '4 Gruppen / 4 Rettungssatz / Zugeinrichtung / 4000 l Löschwasser, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL SCHIENE',
            'category' => 'klein',
            'catchword' => 'Hilfeleistung Straßenbahn',
            'requirement' => '1 Gruppe / 1 Rettungssatz, FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL SCHIENE',
            'category' => 'klein',
            'catchword' => 'Hilfeleistung S-Bahn',
            'requirement' => '1 Gruppe / 1 Rettungssatz, FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL SCHIENE',
            'category' => 'klein',
            'catchword' => 'Hilfeleistung U-Bahn',
            'requirement' => '1 Gruppe / 1 Rettungssatz, FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL WASSER',
            'category' => 'Wasser',
            'catchword' => 'Bergung Sache / Leiche',
            'requirement' => '1 Trupp / 1 Boot',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL WASSER',
            'category' => 'Wasser',
            'catchword' => 'Rettung Tier',
            'requirement' => '1 Trupp / 1 Boot',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL WASSER',
            'category' => 'Wasser',
            'catchword' => 'Rettung Person',
            'requirement' => '1 Trupp / 1 Boot',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL WASSER',
            'category' => 'Wasser',
            'catchword' => 'Tauchereinsatz ohne Rettung',
            'requirement' => '1 Trupp / 1 Boot',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL TRAGEHILFE',
            'category' => 'RD',
            'catchword' => 'Tragehilfe',
            'requirement' => '1 Staffel',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum / Ast droht zu fallen',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum / Ast auf Fahrbahn',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum / Ast auf Schiene',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum / Ast auf Gebäude',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum / Ast auf Stromleitung',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum / Ast auf PKW / LKW',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Baum umgestürzt',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Bauteil / Gegenstand droht zu fallen',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Gebäude sichern',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Bauzaun sichern',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Fahrbahn / Gehweg überschwemmt',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Gebäude unter Wasser',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Keller unter Wasser',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Fahrzeug / sonstigen Gegenstand sichern',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'Erkundung nicht zeitkritisch',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL UNWETTER',
            'category' => 'Unwetter',
            'catchword' => 'sonstiger Schaden',
            'requirement' => 'FW-EL, KEZ',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 1',
            'category' => 'Luft',
            'catchword' => 'Notlandung',
            'requirement' => '3 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 1',
            'category' => 'Luft',
            'catchword' => 'Ballon',
            'requirement' => '3 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 1',
            'category' => 'Luft',
            'catchword' => 'Hubschrauber',
            'requirement' => '3 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 1',
            'category' => 'Luft',
            'catchword' => 'Kleinflugzeug',
            'requirement' => '3 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 2',
            'category' => 'Luft',
            'catchword' => 'Frachtflugzeug',
            'requirement' => '4 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 2',
            'category' => 'Luft',
            'catchword' => 'Passagierflugzeug',
            'requirement' => '4 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU FLUGZEUG 2',
            'category' => 'Luft',
            'catchword' => 'Militärflugzeug',
            'requirement' => '4 Gruppen / 3 Rettungssätze / 4000 l Löschwasser / Rettungsplattform / FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU SCHIFF KOLLISION',
            'category' => 'Wasser',
            'catchword' => 'Kollision Passagierschiff',
            'requirement' => '3 Gruppen / 2 Boote / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU SCHIFF KOLLISION',
            'category' => 'Wasser',
            'catchword' => 'Kollision Frachtschiff',
            'requirement' => '3 Gruppen / 2 Boote / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU SCHIFF KOLLISION',
            'category' => 'Wasser',
            'catchword' => 'Kollision Boot / Yacht / Floß',
            'requirement' => '2 Gruppen / 1 Boot / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU SCHIFF LECK',
            'category' => 'Wasser',
            'catchword' => 'Schiff leck Passagierschiff',
            'requirement' => '3 Gruppen / 2 Boote / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU SCHIFF LECK',
            'category' => 'Wasser',
            'catchword' => 'Schiff leck Frachtschiff',
            'requirement' => '3 Gruppen / 2 Boote / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'THL',
            'keyword' => 'THL VU ZUG',
            'category' => 'VU',
            'catchword' => 'Zug',
            'requirement' => '2 Gruppen / 3 Rettungssätze / Rettungsplattform / 4000 l Löschwasser / FW-EL / Fachberater THW / THW SEG',
        ]);
        /** Stichwörter ABC */
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 1',
            'category' => 'Geruch',
            'catchword' => 'undefinierbarer Geruch',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 1',
            'category' => 'Geruch',
            'catchword' => 'Geruch nach Ammoniak',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 1',
            'category' => 'Geruch',
            'catchword' => 'Geruch nach Chlor',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 1',
            'category' => 'Geruch',
            'catchword' => 'Geruch nach Erdgas / Gas',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC KRAFTSTOFF',
            'category' => 'Gefahrstoff',
            'catchword' => 'auslaufender Kraftstoff (z. B. Benzin, Diesel)',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 2',
            'category' => 'Gefahrstoff',
            'catchword' => 'verdächtiger Stoff',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert(
            ['type' => 'ABC',
                'keyword' => 'ABC 2',
                'category' => 'Gefahrstoff',
                'catchword' => 'undefinierbare Flüssigkeit',
                'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
            ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 2',
            'category' => 'Gefahrstoff',
            'catchword' => 'undefinierbarer Gegenstand',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 2',
            'category' => 'Gefahrstoff',
            'catchword' => 'kleine Menge',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 2',
            'category' => 'Gefahrstoff',
            'catchword' => 'undefinierbares Pulver',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 2',
            'category' => 'Gefahrstoff',
            'catchword' => 'Gasaustritt im Freien',
            'requirement' => '1 Staffel / 4 PA / Ex-Warngerät / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 3',
            'category' => 'Gefahrstoff',
            'catchword' => 'große Menge',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1800 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 3',
            'category' => 'Gefahrstoff',
            'catchword' => 'Gasaustritt brennbar',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1800 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC 3',
            'category' => 'Gefahrstoff',
            'catchword' => 'Gasaustritt im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1800 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Atom im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / 1800 l Löschwasser / 6 CSA / 120 l Schaummittel / 250 kg ABC Löschpulver / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Atom im Freien',
            'requirement' => '2 Gruppen / 8 PA / 1800 l Löschwasser / 6 CSA / 120 l Schaummittel / 250 kg ABC Löschpulver / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Atom PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / 1800 l Löschwasser / 6 CSA / 120 l Schaummittel / 250 kg ABC Löschpulver / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Atomkraftwerk (AKW)',
            'requirement' => '2 Gruppen / 8 PA / 1800 l Löschwasser / 6 CSA / 120 l Schaummittel / 250 kg ABC Löschpulver / FW-EL',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Tankstelle',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Biogasanlage',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Raffinerie',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Tanklager',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Tankwagen',
            'requirement' => '4 Gruppen / 3200 l Löschwasser / 12 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Bio im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Bio im Freien',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Bio PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Chemie im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Chemie im Freien',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Chemie Zug',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC B BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'Brand Chemie LKW',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Atom Austritt im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / 1 Wärmebildkamera / 6 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Atom Austritt im Freien',
            'requirement' => '2 Gruppen / 8 PA / 1 Wärmebildkamera / 6 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Atom PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / 1 Wärmebildkamera / 6 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL ATOM',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL VU Atom PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / 1 Wärmebildkamera / 6 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser / 2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Bio Austritt im Freien',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Bio Austritt im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Bio PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Chemie Austritt im Gebäude',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Chemie Austritt im Freien',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL Chemie PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL VU Bio PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL VU Chemie PKW / LKW',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC THL BIO / CHEMIE',
            'category' => 'Gefahrstoff',
            'catchword' => 'THL VU Chemie Zug',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC EXPLOSION',
            'category' => 'Gefahrstoff',
            'catchword' => 'Explosion / Verpuffung',
            'requirement' => '2 Gruppen / 8 PA / Ex-Warngerät / 1 Wärmebildkamera / 4 CSA / 120 l Schaummittel / 250 kg ABC-Löschpulver / 1800 l Löschwasser /2 Rettungssätze / FW-EL / Fachberater THW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC ÖL WASSER',
            'category' => 'Gefahrstoff',
            'catchword' => 'Öl auf fließendem Gewässer',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC ÖL WASSER',
            'category' => 'Gefahrstoff',
            'catchword' => 'Öl auf stehendem Gewässer',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC ÖL LAND',
            'category' => 'Gefahrstoff',
            'catchword' => 'undichter Heizöltank',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => 'ABC ÖL LAND',
            'category' => 'Gefahrstoff',
            'catchword' => 'ausgedehnter Ölschaden',
            'requirement' => '1 Trupp',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage Ammoniak',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage Ammoniak',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage Chlor',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage Stickstoff',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage CO2',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage Butan',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage Propan',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'ABC',
            'keyword' => ' ABC GEFAHRSTOFFMELDEANLAGE',
            'category' => 'GMA',
            'catchword' => 'Meldeanlage undefiniert',
            'requirement' => '1 Staffel / 4 PA / 500 l Löschwasser',
        ]);
        /** Stichwörter Sonstige */
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON BELEUCHTUNG',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON EINGLEISEN',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON HILFE / SONSTIGES FW',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON HUBSCHRAUBERLANDUNG',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON MOTORRADSTREIFE',
            'category' => 'Sonstige',
            'catchword' => 'Motorradstreife',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON PSNV (B)',
            'category' => 'Sonstige',
            'catchword' => 'Betroffene',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON PSNV (E)',
            'category' => 'Sonstige',
            'catchword' => 'Einsatzkräfte',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'THW BEREITSCHAFT',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'SON TRAGEHILFE',
            'category' => 'Sonstige',
            'catchword' => 'Tragehilfe für den Rettungsdienst',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Sonstiges',
            'keyword' => 'ÜBERÖRTLICHER EINSATZ',
            'category' => 'Sonstige',
            'catchword' => null,
            'requirement' => null,
        ]);

        /** Stichwörter Info */
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF ABNAHME BMA',
            'category' => 'BMA',
            'catchword' => 'Abnahme BMA',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF APOTHEKENAUSKUNFT',
            'category' => 'Auskunft',
            'catchword' => 'Apothekenauskunft',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Fahrzeugdefekt',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Gerätedefekt',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Eigenunfall',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Planungsfehler',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Personalausfall RD-Personal',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Personalverschulden',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Personalausfall Arzt ',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Witterung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF AUSFALL',
            'category' => 'Ausfall',
            'catchword' => 'Ausfall – Desinfektion',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF BMA PROBE',
            'category' => 'BMA',
            'catchword' => 'BMA Probe',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF BMA STÖRUNG',
            'category' => 'BMA',
            'catchword' => 'BMA Störung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF EIGENUNFALL ',
            'category' => 'Benachrichtigung',
            'catchword' => 'Eigenunfall',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF GIFTNOTRUF',
            'category' => 'INF',
            'catchword' => 'Giftnotruf',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF HOCHWASSERMELDUNG',
            'category' => 'Benachrichtigung',
            'catchword' => 'Hochwassermeldung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF KASSENÄRZTLICHER BEREITSCHAFTSDIENST',
            'category' => 'Auskunft',
            'catchword' => 'Vermittlung KVB-Arzt',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF LUFTBEOBACHTUNG',
            'category' => 'Sonstiges',
            'catchword' => 'Luftbeobachtung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF ÖFFENTLICHKEITSARBEIT',
            'category' => 'Sonstiges',
            'catchword' => 'Öffentlichkeitsarbeit',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF PROBEALARM',
            'category' => 'Sonstiges',
            'catchword' => 'Probealarm',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF SAN-DIENST',
            'category' => 'Sonstiges',
            'catchword' => 'Sanitätsdienst',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF SICHERHEITSWACHE',
            'category' => 'Sonstiges',
            'catchword' => 'Sicherheitswache',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF UNWETTERWARNUNG',
            'category' => 'Sonstiges',
            'catchword' => 'Unwetterwarnung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF VERKEHRSSICHERUNG',
            'category' => 'Sonstiges',
            'catchword' => 'Verkehrssicherung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF WACHBESETZUNG',
            'category' => 'Sonstiges',
            'catchword' => 'Wachbesetzung',
            'requirement' => null,
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Info',
            'keyword' => 'INF ZAHNARZTNOTDIENST',
            'category' => 'Auskunft',
            'catchword' => 'Zahnarztnotdienst',
            'requirement' => null,
        ]);
        /** Rettungsdienst */
        DB::table('call_keywords')->insert([
            'type' => 'RD',
            'keyword' => 'RD 1',
            'category' => 'Bewusstsein',
            'catchword' => 'Bewusstsein',
            'requirement' => '1 RTW',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'RD',
            'keyword' => 'RD 2',
            'category' => 'Bewusstsein',
            'catchword' => 'vitale Bedrohung',
            'requirement' => '1 RTW / 1 NEF',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'RD',
            'keyword' => 'RD 2',
            'category' => 'Bewusstsein',
            'catchword' => 'Nachforderung NA',
            'requirement' => '1 RTW / 1 NEF',
        ]);
        /** B 6 */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 6',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 6',
            'requirement' => '8 Gruppen / 6000 l Löschwasser / 20 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B 7 */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 7',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 7',
            'requirement' => '10 Gruppen / 7000 l Löschwasser / 24 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);
        /** B 8 */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B 8',
            'category' => 'Alarmstufenerhöhung',
            'catchword' => 'auf B 8',
            'requirement' => '12 Gruppen / 8000 l Löschwasser / 28 PA, 1 Wärmebildkamera, DL, FW-EL, Fachberater THW',
        ]);


        /** B BMA */
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Brandmeldeanlage',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Rauchwarnmelder über Hausnotruf',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA',
        ]);
        DB::table('call_keywords')->insert([
            'type' => 'Brand',
            'keyword' => 'B BMA',
            'category' => 'Meldeanlage',
            'catchword' => 'Rauchwarnmelder',
            'requirement' => '1 Staffel / 500 l Löschwasser / 4 PA',
        ]);
    }
}
