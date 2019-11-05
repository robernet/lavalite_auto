<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class MakeTransformer extends TransformerAbstract
{
    public function transform(\Laraauto\Automobile\Models\Make $make)
    {
        return [
            'id'                => $make->getRouteKey(),
            'key'               => [
                'public'    => $make->getPublicKey(),
                'route'     => $make->getRouteKey(),
            ], 
            'id'                => $make->id,
            'name'              => $make->name,
            'description'       => $make->description,
            'image'             => $make->image,
            'slug'              => $make->slug,
            'status'            => $make->status,
            'upload_folder'     => $make->upload_folder,
            'deleted_at'        => $make->deleted_at,
            'updated_at'        => $make->updated_at,
            'created_at'        => $make->created_at,
            'url'               => [
                'public'    => trans_url('automobile/'.$make->getPublicKey()),
                'user'      => guard_url('automobile/make/'.$make->getRouteKey()),
            ], 
            'status'            => trans('app.'.$make->status),
            'created_at'        => format_date($make->created_at),
            'updated_at'        => format_date($make->updated_at),
        ];
    }
}