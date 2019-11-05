<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for automobile in automobile package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  automobile module in automobile package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Automobile',
    'names'         => 'Automobiles',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Automobiles',
        'sub'   => 'Automobiles',
        'list'  => 'List of automobiles',
        'edit'  => 'Edit automobile',
        'create'    => 'Create new automobile'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'type'                => ['Any','Pickup','SUV','Cupe','Convertible','Sedan','Minicar'],
            'transmission'        => ['Manual','Automatic','Semi-automatic'],
            'fuel_type'           => ['Gasoline','Diesel','Petrol','LPG'],
            'conditionn'          => ['Used','New'],
            'engine'              => ['3 cylinders','4 cylinders','5 cylinders','6 cylinders','8 cylinders','10 cylinders','12 cylinders'],
            'status'              => ['Show','Hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'country_id'                 => 'Please enter country',
        'state_id'                   => 'Please enter state',
        'district_id'                => 'Please enter district',
        'city_id'                    => 'Please enter city',
        'location_id'                => 'Please enter location',
        'make_id'                    => 'Please enter make',
        'model_id'                   => 'Please enter model',
        'name'                       => 'Please enter name',
        'type'                       => 'Please select body type',
        'releaseyear'                => 'Please select release year',
        'color'                      => 'Please enter color',
        'mileage'                    => 'Please enter mileage',
        'price'                      => 'Please enter price',
        'transmission'               => 'Please select transmission',
        'fuel_type'                  => 'Please select fuel type',
        'description'                => 'Please enter description',
        'conditionn'                 => 'Please select conditionn',
        'engine'                     => 'Please select engine',
        'features'                   => 'Please enter features',
        'address'                    => 'Please enter address',
        'neighborhood'               => 'Please enter neighborhood',
        'zip'                        => 'Please enter zip',
        'images'                     => 'Please enter images',
        'status'                     => 'Please select status',
        'slug'                       => 'Please enter slug',
        'viewcount'                  => 'Please enter viewcount',
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
        'user_type'                  => 'User type',
        'country_id'                 => 'Country',
        'state_id'                   => 'State',
        'district_id'                => 'District',
        'city_id'                    => 'City',
        'location_id'                => 'Location ',
        'make_id'                    => 'Make',
        'model_id'                   => 'Model',
        'name'                       => 'Name',
        'type'                       => 'Body type',
        'releaseyear'                => 'Releaseyear',
        'color'                      => 'Color',
        'mileage'                    => 'Mileage',
        'price'                      => 'Price',
        'transmission'               => 'Transmission',
        'fuel_type'                  => 'Fuel type',
        'description'                => 'Description',
        'conditionn'                 => 'Conditionn',
        'engine'                     => 'Engine',
        'features'                   => 'Features',
        'address'                    => 'Address',
        'neighborhood'               => 'Neighborhood',
        'zip'                        => 'Zip',
        'images'                     => 'Images',
        'status'                     => 'Status',
        'slug'                       => 'Slug',
        'viewcount'                  => 'Viewcount',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'country_id'                 => ['name' => 'Country', 'data-column' => 1, 'checked'],
        'state_id'                   => ['name' => 'State', 'data-column' => 2, 'checked'],
        'district_id'                => ['name' => 'District', 'data-column' => 3, 'checked'],
        'city_id'                    => ['name' => 'City', 'data-column' => 4, 'checked'],
        'location_id'                => ['name' => 'Location ', 'data-column' => 5, 'checked'],
        'make_id'                    => ['name' => 'Make', 'data-column' => 6, 'checked'],
        'model_id'                   => ['name' => 'Model', 'data-column' => 7, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 8, 'checked'],
        'type'                       => ['name' => 'Body type', 'data-column' => 9, 'checked'],
        'releaseyear'                => ['name' => 'Releaseyear', 'data-column' => 10, 'checked'],
        'color'                      => ['name' => 'Color', 'data-column' => 11, 'checked'],
        'mileage'                    => ['name' => 'Mileage', 'data-column' => 12, 'checked'],
        'price'                      => ['name' => 'Price', 'data-column' => 13, 'checked'],
        'transmission'               => ['name' => 'Transmission', 'data-column' => 14, 'checked'],
        'fuel_type'                  => ['name' => 'Fuel type', 'data-column' => 15, 'checked'],
        'description'                => ['name' => 'Description', 'data-column' => 16, 'checked'],
        'conditionn'                 => ['name' => 'Conditionn', 'data-column' => 17, 'checked'],
        'engine'                     => ['name' => 'Engine', 'data-column' => 18, 'checked'],
        'zip'                        => ['name' => 'Zip', 'data-column' => 19, 'checked'],
        'viewcount'                  => ['name' => 'Viewcount', 'data-column' => 20, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Automobiles',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
