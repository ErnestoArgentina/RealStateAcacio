<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-07 07:21:58',
                'updated_at' => '2021-08-07 07:21:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-07 07:21:58',
                'updated_at' => '2021-08-07 07:21:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-07 07:21:58',
                'updated_at' => '2021-08-07 07:21:58',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'igrejas',
                'slug' => 'igrejas',
                'display_name_singular' => 'Igreja',
                'display_name_plural' => 'Igrejas',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Igreja',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-08-10 23:05:44',
                'updated_at' => '2021-08-10 23:05:44',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'cultos',
                'slug' => 'cultos',
                'display_name_singular' => 'Culto',
                'display_name_plural' => 'Cultos',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\Culto',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-08-11 11:07:10',
                'updated_at' => '2021-08-11 11:07:10',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'bairros',
                'slug' => 'bairros',
                'display_name_singular' => 'Bairro',
                'display_name_plural' => 'Bairros',
                'icon' => 'voyager-location',
                'model_name' => 'App\\Models\\Bairro',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-09-02 12:23:46',
                'updated_at' => '2021-09-02 13:27:00',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'casas',
                'slug' => 'casas',
                'display_name_singular' => 'Casa',
                'display_name_plural' => 'Casas',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Casa',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-09-02 12:34:01',
                'updated_at' => '2021-09-19 11:04:58',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'related_bairro',
                'slug' => 'related-bairro',
                'display_name_singular' => 'Related Bairro',
                'display_name_plural' => 'Related Bairros',
                'icon' => NULL,
                'model_name' => 'App\\Models\\RelatedBairro',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-09-02 13:48:28',
                'updated_at' => '2021-09-02 13:53:29',
            ),
        ));
        
        
    }
}