<?php

namespace Laraauto;

use DB;
use Illuminate\Database\Seeder;

class AutomobileTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('automobiles')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'automobile.automobile.view',
                'name'      => 'View Automobile',
            ],
            [
                'slug'      => 'automobile.automobile.create',
                'name'      => 'Create Automobile',
            ],
            [
                'slug'      => 'automobile.automobile.edit',
                'name'      => 'Update Automobile',
            ],
            [
                'slug'      => 'automobile.automobile.delete',
                'name'      => 'Delete Automobile',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/automobile/automobile',
                'name'        => 'Automobile',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/automobile/automobile',
                'name'        => 'Automobile',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'automobile',
                'name'        => 'Automobile',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'pacakge'   => 'Automobile',
                'module'    => 'Automobile',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'automobile.automobile.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
