<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for directory in automobile package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  directory module in automobile package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Directory',
    'names'         => 'Directories',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Directories',
        'sub'   => 'Directories',
        'list'  => 'List of directories',
        'edit'  => 'Edit directory',
        'create'    => 'Create new directory'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['yes','no'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'country_id'                 => 'Please enter country ',
        'state_id'                   => 'Please enter state ',
        'district_id'                => 'Please enter district ',
        'city_id'                    => 'Please enter city ',
        'location_id'                => 'Please enter location ',
        'title'                      => 'Please enter title',
        'phone'                      => 'Please enter phone',
        'website'                    => 'Please enter website',
        'email'                      => 'Please enter email',
        'address'                    => 'Please enter address',
        'zipcode'                    => 'Please enter zipcode',
        'latitude'                   => 'Please enter latitude',
        'longitude'                  => 'Please enter longitude',
        'description'                => 'Please enter description',
        'details'                    => 'Please enter details',
        'images'                     => 'Please enter images',
        'viewcount'                  => 'Please enter viewcount',
        'uploaded_folder'            => 'Please enter uploaded folder',
        'slug'                       => 'Please enter slug',
        'published'                  => 'Please select published',
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
        'user_type'                  => 'User type',
        'country_id'                 => 'Country id',
        'state_id'                   => 'State id',
        'district_id'                => 'District id',
        'city_id'                    => 'City id',
        'location_id'                => 'Location id',
        'title'                      => 'Title',
        'phone'                      => 'Phone',
        'website'                    => 'Website',
        'email'                      => 'Email',
        'address'                    => 'Address',
        'zipcode'                    => 'Zipcode',
        'latitude'                   => 'Latitude',
        'longitude'                  => 'Longitude',
        'description'                => 'Description',
        'details'                    => 'Details',
        'images'                     => 'Images',
        'viewcount'                  => 'Viewcount',
        'uploaded_folder'            => 'Uploaded folder',
        'slug'                       => 'Slug',
        'published'                  => 'Published',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'user_id'                    => ['name' => 'User id', 'data-column' => 1, 'checked'],
        'title'                      => ['name' => 'Title', 'data-column' => 2, 'checked'],
        'phone'                      => ['name' => 'Phone', 'data-column' => 3, 'checked'],
        'email'                      => ['name' => 'Email', 'data-column' => 4, 'checked'],
        'published'                  => ['name' => 'Published', 'data-column' => 5, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Directories',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
