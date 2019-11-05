<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class DirectoryTransformer extends TransformerAbstract
{
    public function transform(\Laraauto\Automobile\Models\Directory $directory)
    {
        return [
            'id'                => $directory->getRouteKey(),
            'key'               => [
                'public'    => $directory->getPublicKey(),
                'route'     => $directory->getRouteKey(),
            ], 
            'id'                => $directory->id,
            'user_id'           => $directory->user_id,
            'user_type'         => $directory->user_type,
            'country_id'        => $directory->country_id,
            'state_id'          => $directory->state_id,
            'district_id'       => $directory->district_id,
            'city_id'           => $directory->city_id,
            'location_id'       => $directory->location_id,
            'title'             => $directory->title,
            'phone'             => $directory->phone,
            'website'           => $directory->website,
            'email'             => $directory->email,
            'address'           => $directory->address,
            'zipcode'           => $directory->zipcode,
            'latitude'          => $directory->latitude,
            'longitude'         => $directory->longitude,
            'description'       => $directory->description,
            'details'           => $directory->details,
            'images'            => $directory->images,
            'viewcount'         => $directory->viewcount,
            'uploaded_folder'   => $directory->uploaded_folder,
            'slug'              => $directory->slug,
            'published'         => $directory->published,
            'created_at'        => $directory->created_at,
            'updated_at'        => $directory->updated_at,
            'deleted_at'        => $directory->deleted_at,
            'url'               => [
                'public'    => trans_url('automobile/'.$directory->getPublicKey()),
                'user'      => guard_url('automobile/directory/'.$directory->getRouteKey()),
            ], 
            'status'            => trans('app.'.$directory->status),
            'created_at'        => format_date($directory->created_at),
            'updated_at'        => format_date($directory->updated_at),
        ];
    }
}