<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for accessory in automobile package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  accessory module in automobile package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Accessory',
    'names'         => 'Accessories',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Accessories',
        'sub'   => 'Accessories',
        'list'  => 'List of accessories',
        'edit'  => 'Edit accessory',
        'create'    => 'Create new accessory'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'category'            => ['All','Tires','Bumpers','Body Parts','Axels','Steering','Interior','Stereo','Auto security','Turbochargers','Carburetor','Auto Electric','Break Parts','Batteries','Car Care Products','Suspension','Wheels'],
            'status'              => ['show','hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user id',
        'title'                      => 'Please enter title',
        'category'                   => 'Please select category',
        'company'                    => 'Please enter company',
        'model'                      => 'Please enter model',
        'price'                      => 'Please enter price',
        'images'                     => 'Please enter images',
        'status'                     => 'Please select status',
        'slug'                       => 'Please enter slug',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'user_id'                    => 'User id',
        'title'                      => 'Title',
        'category'                   => 'Category',
        'company'                    => 'Company',
        'model'                      => 'Model',
        'price'                      => 'Price',
        'images'                     => 'Images',
        'status'                     => 'Status',
        'slug'                       => 'Slug',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'title'                      => ['name' => 'Title', 'data-column' => 1, 'checked'],
        'category'                   => ['name' => 'Category', 'data-column' => 2, 'checked'],
        'company'                    => ['name' => 'Company', 'data-column' => 3, 'checked'],
        'model'                      => ['name' => 'Model', 'data-column' => 4, 'checked'],
        'price'                      => ['name' => 'Price', 'data-column' => 5, 'checked'],
        'images'                     => ['name' => 'Images', 'data-column' => 6, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Accessories',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
