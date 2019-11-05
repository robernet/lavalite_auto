<?php

namespace Laraauto;

use DB;
use Illuminate\Database\Seeder;

class AutomobileTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('accessories')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'automobile.accessory.view',
                'name'      => 'View Accessory',
            ],
            [
                'slug'      => 'automobile.accessory.create',
                'name'      => 'Create Accessory',
            ],
            [
                'slug'      => 'automobile.accessory.edit',
                'name'      => 'Update Accessory',
            ],
            [
                'slug'      => 'automobile.accessory.delete',
                'name'      => 'Delete Accessory',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/automobile/accessory',
                'name'        => 'Accessory',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/automobile/accessory',
                'name'        => 'Accessory',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'accessory',
                'name'        => 'Accessory',
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
                'module'    => 'Accessory',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'automobile.accessory.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
