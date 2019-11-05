<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class AutomobileTransformer extends TransformerAbstract
{
    public function transform(\Laraauto\Automobile\Models\Automobile $automobile)
    {
        return [
            'id'                => $automobile->getRouteKey(),
            'key'               => [
                'public'    => $automobile->getPublicKey(),
                'route'     => $automobile->getRouteKey(),
            ], 
            'id'                => $automobile->id,
            'user_id'           => $automobile->user_id,
            'user_type'         => $automobile->user_type,
            'country_id'        => $automobile->country_id,
            'state_id'          => $automobile->state_id,
            'district_id'       => $automobile->district_id,
            'city_id'           => $automobile->city_id,
            'location_id'       => $automobile->location_id,
            'make_id'           => $automobile->make_id,
            'model_id'          => $automobile->model_id,
            'name'              => $automobile->name,
            'type'              => $automobile->type,
            'releaseyear'       => $automobile->releaseyear,
            'color'             => $automobile->color,
            'mileage'           => $automobile->mileage,
            'price'             => $automobile->price,
            'transmission'      => $automobile->transmission,
            'fuel_type'         => $automobile->fuel_type,
            'description'       => $automobile->description,
            'conditionn'        => $automobile->conditionn,
            'engine'            => $automobile->engine,
            'features'          => $automobile->features,
            'address'           => $automobile->address,
            'neighborhood'      => $automobile->neighborhood,
            'zip'               => $automobile->zip,
            'images'            => $automobile->images,
            'status'            => $automobile->status,
            'slug'              => $automobile->slug,
            'viewcount'         => $automobile->viewcount,
            'upload_folder'     => $automobile->upload_folder,
            'created_at'        => $automobile->created_at,
            'updated_at'        => $automobile->updated_at,
            'deleted_at'        => $automobile->deleted_at,
            'url'               => [
                'public'    => trans_url('automobile/'.$automobile->getPublicKey()),
                'user'      => guard_url('automobile/automobile/'.$automobile->getRouteKey()),
            ], 
            'status'            => trans('app.'.$automobile->status),
            'created_at'        => format_date($automobile->created_at),
            'updated_at'        => format_date($automobile->updated_at),
        ];
    }
}