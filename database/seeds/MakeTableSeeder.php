<?php

namespace Laraauto;

use DB;
use Illuminate\Database\Seeder;

class AutomobileTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('makes')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'automobile.make.view',
                'name'      => 'View Make',
            ],
            [
                'slug'      => 'automobile.make.create',
                'name'      => 'Create Make',
            ],
            [
                'slug'      => 'automobile.make.edit',
                'name'      => 'Update Make',
            ],
            [
                'slug'      => 'automobile.make.delete',
                'name'      => 'Delete Make',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/automobile/make',
                'name'        => 'Make',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/automobile/make',
                'name'        => 'Make',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'make',
                'name'        => 'Make',
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
                'module'    => 'Make',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'automobile.make.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
