<?php

use Illuminate\Database\Seeder;

class MasterDonationsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_donations')->insert([[
            'nama' => 'infaq Jumat',
            'status' => 'Aktif'

        ], [
        	'nama' => 'Zakat',
        	'status' => 'Aktif'
        ],[
        	'nama' => 'Qurban',
        	'status' => 'Aktif'
        ],[
        	'nama' => 'Kotak Amal',
        	'status' => 'Aktif'
        ],[
        	'nama' => 'Biaya Service AC',
        	'status' => 'Aktif'
        ],[
        	'nama' => 'Biaya Operasional Kebersihan',
        	'status' => 'Aktif'
        ],[
        	'nama' => 'Biaya Imam Rawatib',
        	'status' => 'Aktif'
        ],[
        	'nama' => 'Biaya Lain-Lain',
        	'status' => 'Aktif'
            
        ]]);
    }
}
