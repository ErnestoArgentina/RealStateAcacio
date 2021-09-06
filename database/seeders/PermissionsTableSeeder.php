<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 07:22:06',
                'updated_at' => '2021-08-07 07:22:06',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 07:22:07',
                'updated_at' => '2021-08-07 07:22:07',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 07:22:07',
                'updated_at' => '2021-08-07 07:22:07',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 07:22:07',
                'updated_at' => '2021-08-07 07:22:07',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 07:22:08',
                'updated_at' => '2021-08-07 07:22:08',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 07:22:08',
                'updated_at' => '2021-08-07 07:22:08',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 07:22:08',
                'updated_at' => '2021-08-07 07:22:08',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 07:22:08',
                'updated_at' => '2021-08-07 07:22:08',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 07:22:08',
                'updated_at' => '2021-08-07 07:22:08',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 07:22:08',
                'updated_at' => '2021-08-07 07:22:08',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 07:22:09',
                'updated_at' => '2021-08-07 07:22:09',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-08-07 07:22:16',
                'updated_at' => '2021-08-07 07:22:16',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_igrejas',
                'table_name' => 'igrejas',
                'created_at' => '2021-08-10 23:05:45',
                'updated_at' => '2021-08-10 23:05:45',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_igrejas',
                'table_name' => 'igrejas',
                'created_at' => '2021-08-10 23:05:45',
                'updated_at' => '2021-08-10 23:05:45',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_igrejas',
                'table_name' => 'igrejas',
                'created_at' => '2021-08-10 23:05:45',
                'updated_at' => '2021-08-10 23:05:45',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_igrejas',
                'table_name' => 'igrejas',
                'created_at' => '2021-08-10 23:05:45',
                'updated_at' => '2021-08-10 23:05:45',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_igrejas',
                'table_name' => 'igrejas',
                'created_at' => '2021-08-10 23:05:45',
                'updated_at' => '2021-08-10 23:05:45',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_cultos',
                'table_name' => 'cultos',
                'created_at' => '2021-08-11 11:07:10',
                'updated_at' => '2021-08-11 11:07:10',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_cultos',
                'table_name' => 'cultos',
                'created_at' => '2021-08-11 11:07:10',
                'updated_at' => '2021-08-11 11:07:10',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_cultos',
                'table_name' => 'cultos',
                'created_at' => '2021-08-11 11:07:10',
                'updated_at' => '2021-08-11 11:07:10',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_cultos',
                'table_name' => 'cultos',
                'created_at' => '2021-08-11 11:07:10',
                'updated_at' => '2021-08-11 11:07:10',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_cultos',
                'table_name' => 'cultos',
                'created_at' => '2021-08-11 11:07:10',
                'updated_at' => '2021-08-11 11:07:10',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_bairros',
                'table_name' => 'bairros',
                'created_at' => '2021-09-02 12:23:46',
                'updated_at' => '2021-09-02 12:23:46',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_bairros',
                'table_name' => 'bairros',
                'created_at' => '2021-09-02 12:23:46',
                'updated_at' => '2021-09-02 12:23:46',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_bairros',
                'table_name' => 'bairros',
                'created_at' => '2021-09-02 12:23:46',
                'updated_at' => '2021-09-02 12:23:46',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_bairros',
                'table_name' => 'bairros',
                'created_at' => '2021-09-02 12:23:46',
                'updated_at' => '2021-09-02 12:23:46',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_bairros',
                'table_name' => 'bairros',
                'created_at' => '2021-09-02 12:23:46',
                'updated_at' => '2021-09-02 12:23:46',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_casas',
                'table_name' => 'casas',
                'created_at' => '2021-09-02 12:34:01',
                'updated_at' => '2021-09-02 12:34:01',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_casas',
                'table_name' => 'casas',
                'created_at' => '2021-09-02 12:34:01',
                'updated_at' => '2021-09-02 12:34:01',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_casas',
                'table_name' => 'casas',
                'created_at' => '2021-09-02 12:34:01',
                'updated_at' => '2021-09-02 12:34:01',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_casas',
                'table_name' => 'casas',
                'created_at' => '2021-09-02 12:34:01',
                'updated_at' => '2021-09-02 12:34:01',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_casas',
                'table_name' => 'casas',
                'created_at' => '2021-09-02 12:34:01',
                'updated_at' => '2021-09-02 12:34:01',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_related_bairro',
                'table_name' => 'related_bairro',
                'created_at' => '2021-09-02 13:48:29',
                'updated_at' => '2021-09-02 13:48:29',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_related_bairro',
                'table_name' => 'related_bairro',
                'created_at' => '2021-09-02 13:48:29',
                'updated_at' => '2021-09-02 13:48:29',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_related_bairro',
                'table_name' => 'related_bairro',
                'created_at' => '2021-09-02 13:48:29',
                'updated_at' => '2021-09-02 13:48:29',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_related_bairro',
                'table_name' => 'related_bairro',
                'created_at' => '2021-09-02 13:48:29',
                'updated_at' => '2021-09-02 13:48:29',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_related_bairro',
                'table_name' => 'related_bairro',
                'created_at' => '2021-09-02 13:48:29',
                'updated_at' => '2021-09-02 13:48:29',
            ),
        ));
        
        
    }
}