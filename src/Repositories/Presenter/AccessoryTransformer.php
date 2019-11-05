<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class AccessoryTransformer extends TransformerAbstract
{
    public function transform(\Laraauto\Automobile\Models\Accessory $accessory)
    {
        return [
            'id'                => $accessory->getRouteKey(),
            'key'               => [
                'public'    => $accessory->getPublicKey(),
                'route'     => $accessory->getRouteKey(),
            ], 
            'id'                => $accessory->id,
            'user_id'           => $accessory->user_id,
            'title'             => $accessory->title,
            'category'          => $accessory->category,
            'company'           => $accessory->company,
            'model'             => $accessory->model,
            'price'             => $accessory->price,
            'images'            => $accessory->images,
            'status'            => $accessory->status,
            'slug'              => $accessory->slug,
            'upload_folder'     => $accessory->upload_folder,
            'created_at'        => $accessory->created_at,
            'updated_at'        => $accessory->updated_at,
            'deleted_at'        => $accessory->deleted_at,
            'url'               => [
                'public'    => trans_url('automobile/'.$accessory->getPublicKey()),
                'user'      => guard_url('automobile/accessory/'.$accessory->getRouteKey()),
            ], 
            'status'            => trans('app.'.$accessory->status),
            'created_at'        => format_date($accessory->created_at),
            'updated_at'        => format_date($accessory->updated_at),
        ];
    }
}