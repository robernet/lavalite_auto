<?php

namespace Laraauto;

use DB;
use Illuminate\Database\Seeder;

class AutomobileTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('directories')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'automobile.directory.view',
                'name'      => 'View Directory',
            ],
            [
                'slug'      => 'automobile.directory.create',
                'name'      => 'Create Directory',
            ],
            [
                'slug'      => 'automobile.directory.edit',
                'name'      => 'Update Directory',
            ],
            [
                'slug'      => 'automobile.directory.delete',
                'name'      => 'Delete Directory',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/automobile/directory',
                'name'        => 'Directory',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/automobile/directory',
                'name'        => 'Directory',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'directory',
                'name'        => 'Directory',
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
                'module'    => 'Directory',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'automobile.directory.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
