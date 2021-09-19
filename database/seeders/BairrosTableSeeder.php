<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BairrosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bairros')->delete();
        
        \DB::table('bairros')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descricao' => 'Polana Caniço B',
                'created_at' => '2021-09-19 09:44:17',
                'updated_at' => '2021-09-19 09:44:17',
            ),
            1 => 
            array (
                'id' => 2,
                'descricao' => 'Ferroviario',
                'created_at' => '2021-09-19 09:44:32',
                'updated_at' => '2021-09-19 09:44:32',
            ),
            2 => 
            array (
                'id' => 4,
                'descricao' => 'Mavalane',
                'created_at' => '2021-09-19 09:45:15',
                'updated_at' => '2021-09-19 09:45:15',
            ),
            3 => 
            array (
                'id' => 5,
                'descricao' => 'Maxaquene',
                'created_at' => '2021-09-19 09:45:38',
                'updated_at' => '2021-09-19 09:45:38',
            ),
            4 => 
            array (
                'id' => 6,
                'descricao' => 'Urbanização',
                'created_at' => '2021-09-19 09:46:04',
                'updated_at' => '2021-09-19 09:46:04',
            ),
            5 => 
            array (
                'id' => 7,
                'descricao' => 'Mafalala',
                'created_at' => '2021-09-19 09:46:17',
                'updated_at' => '2021-09-19 09:46:17',
            ),
            6 => 
            array (
                'id' => 8,
                'descricao' => 'Chamanculo',
                'created_at' => '2021-09-19 09:46:32',
                'updated_at' => '2021-09-19 09:46:32',
            ),
        ));
        
        
    }
}