<?php

namespace Laraauto;

use DB;
use Illuminate\Database\Seeder;

class AutomobileTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('carmodels')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'automobile.carmodel.view',
                'name'      => 'View Carmodel',
            ],
            [
                'slug'      => 'automobile.carmodel.create',
                'name'      => 'Create Carmodel',
            ],
            [
                'slug'      => 'automobile.carmodel.edit',
                'name'      => 'Update Carmodel',
            ],
            [
                'slug'      => 'automobile.carmodel.delete',
                'name'      => 'Delete Carmodel',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/automobile/carmodel',
                'name'        => 'Carmodel',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/automobile/carmodel',
                'name'        => 'Carmodel',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'carmodel',
                'name'        => 'Carmodel',
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
                'module'    => 'Carmodel',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'automobile.carmodel.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
