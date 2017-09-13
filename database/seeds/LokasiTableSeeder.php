<?php

use Illuminate\Database\Seeder;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi')->insert([
            'nama' => 'Puchong Prima',
            'person_in_charge' => 'Ahmad'
        ]);
    }
}
