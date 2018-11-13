<?php

use Illuminate\Database\Seeder;

class FinanceTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finance_type')->insert([[
            'name' => 'infaq Jumat',
            'status' => 'Aktif'

        ], [
        	'name' => 'Zakat',
        	'status' => 'Aktif'
        ],[
        	'name' => 'Qurban',
        	'status' => 'Aktif'
        ],[
        	'name' => 'Kotak Amal',
        	'status' => 'Aktif'
        ],[
        	'name' => 'Biaya Service AC',
        	'status' => 'Aktif'
        ],[
        	'name' => 'Biaya Operasional Kebersihan',
        	'status' => 'Aktif'
        ],[
        	'name' => 'Biaya Imam Rawatib',
        	'status' => 'Aktif'
        ],[
        	'name' => 'Biaya Lain-Lain',
        	'status' => 'Aktif'
            
        ]]);
    }
}
