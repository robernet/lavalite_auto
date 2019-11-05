<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for carmodel in automobile package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  carmodel module in automobile package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Carmodel',
    'names'         => 'Carmodels',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Carmodels',
        'sub'   => 'Carmodels',
        'list'  => 'List of carmodels',
        'edit'  => 'Edit carmodel',
        'create'    => 'Create new carmodel'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['Show','Hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'make_id'                    => 'Please enter make id',
        'name'                       => 'Please enter name',
        'description'                => 'Please enter description',
        'image'                      => 'Please enter image',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'upload_folder'              => 'Please enter upload folder',
        'deleted_at'                 => 'Please select deleted at',
        'updated_at'                 => 'Please select updated at',
        'created_at'                 => 'Please select created at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'make_id'                    => 'Make id',
        'name'                       => 'Name',
        'description'                => 'Description',
        'image'                      => 'Image',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'upload_folder'              => 'Upload folder',
        'deleted_at'                 => 'Deleted at',
        'updated_at'                 => 'Updated at',
        'created_at'                 => 'Created at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'make_id'                    => ['name' => 'Make id', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Carmodels',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
