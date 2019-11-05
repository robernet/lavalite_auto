<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CarmodelTransformer extends TransformerAbstract
{
    public function transform(\Laraauto\Automobile\Models\Carmodel $carmodel)
    {
        return [
            'id'                => $carmodel->getRouteKey(),
            'key'               => [
                'public'    => $carmodel->getPublicKey(),
                'route'     => $carmodel->getRouteKey(),
            ], 
            'id'                => $carmodel->id,
            'make_id'           => $carmodel->make_id,
            'name'              => $carmodel->name,
            'description'       => $carmodel->description,
            'image'             => $carmodel->image,
            'slug'              => $carmodel->slug,
            'status'            => $carmodel->status,
            'upload_folder'     => $carmodel->upload_folder,
            'deleted_at'        => $carmodel->deleted_at,
            'updated_at'        => $carmodel->updated_at,
            'created_at'        => $carmodel->created_at,
            'url'               => [
                'public'    => trans_url('automobile/'.$carmodel->getPublicKey()),
                'user'      => guard_url('automobile/carmodel/'.$carmodel->getRouteKey()),
            ], 
            'status'            => trans('app.'.$carmodel->status),
            'created_at'        => format_date($carmodel->created_at),
            'updated_at'        => format_date($carmodel->updated_at),
        ];
    }
}