<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'laraauto',

    /*
     * Package.
     */
    'package'   => 'automobile',

    /*
     * Modules.
     */
    'modules'   => ['automobile', 
'make', 
'carmodel', 
'directory', 
'accessory'],

    'automobile'       => [
        'model' => [
            'model'                 => \Laraauto\Automobile\Models\Automobile::class,
            'table'                 => 'automobiles',
            'presenter'             => \Laraauto\Automobile\Repositories\Presenter\AutomobilePresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'user_type',  'country_id',  'state_id',  'district_id',  'city_id',  'location_id',  'make_id',  'model_id',  'name',  'type',  'releaseyear',  'color',  'mileage',  'price',  'transmission',  'fuel_type',  'description',  'conditionn',  'engine',  'features',  'address',  'neighborhood',  'zip',  'images',  'status',  'slug',  'viewcount',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'automobile/automobile',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraauto',
            'package'   => 'Automobile',
            'module'    => 'Automobile',
        ],

    ],

    'make'       => [
        'model' => [
            'model'                 => \Laraauto\Automobile\Models\Make::class,
            'table'                 => 'makes',
            'presenter'             => \Laraauto\Automobile\Repositories\Presenter\MakePresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'description',  'image',  'slug',  'status',  'upload_folder',  'deleted_at',  'updated_at',  'created_at'],
            'translatables'         => [],
            'upload_folder'         => 'automobile/make',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraauto',
            'package'   => 'Automobile',
            'module'    => 'Make',
        ],

    ],

    'carmodel'       => [
        'model' => [
            'model'                 => \Laraauto\Automobile\Models\Carmodel::class,
            'table'                 => 'carmodels',
            'presenter'             => \Laraauto\Automobile\Repositories\Presenter\CarmodelPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'make_id',  'name',  'description',  'image',  'slug',  'status',  'upload_folder',  'deleted_at',  'updated_at',  'created_at'],
            'translatables'         => [],
            'upload_folder'         => 'automobile/carmodel',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraauto',
            'package'   => 'Automobile',
            'module'    => 'Carmodel',
        ],

    ],

    'directory'       => [
        'model' => [
            'model'                 => \Laraauto\Automobile\Models\Directory::class,
            'table'                 => 'directories',
            'presenter'             => \Laraauto\Automobile\Repositories\Presenter\DirectoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'user_type',  'country_id',  'state_id',  'district_id',  'city_id',  'location_id',  'title',  'phone',  'website',  'email',  'address',  'zipcode',  'latitude',  'longitude',  'description',  'details',  'images',  'viewcount',  'uploaded_folder',  'slug',  'published',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'automobile/directory',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraauto',
            'package'   => 'Automobile',
            'module'    => 'Directory',
        ],

    ],

    'accessory'       => [
        'model' => [
            'model'                 => \Laraauto\Automobile\Models\Accessory::class,
            'table'                 => 'accessories',
            'presenter'             => \Laraauto\Automobile\Repositories\Presenter\AccessoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'title',  'category',  'company',  'model',  'price',  'images',  'status',  'slug',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'automobile/accessory',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraauto',
            'package'   => 'Automobile',
            'module'    => 'Accessory',
        ],

    ],
];
