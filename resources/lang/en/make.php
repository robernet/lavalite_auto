<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for make in automobile package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  make module in automobile package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Make',
    'names'         => 'Makes',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Makes',
        'sub'   => 'Makes',
        'list'  => 'List of makes',
        'edit'  => 'Edit make',
        'create'    => 'Create new make'
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
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'description'                => ['name' => 'Description', 'data-column' => 2, 'checked'],
        'created_at'                 => ['name' => 'Created at', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Makes',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
