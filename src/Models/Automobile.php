<?php

namespace Laraauto\Automobile\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Revision\Traits\Revision;
use Litepie\Trans\Traits\Translatable;
class Automobile extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, Revision, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'laraauto.automobile.automobile.model';


    /**
     * The belongs that belong to the automobile.
     */
    public function belongs(){
        return $this->belongsTo('Automobile\Automobile\Models\Make');
    }


    /**
     * The belongsmodel that belong to the automobile.
     */
    public function belongsmodel(){
        return $this->belongsTo('Automobile\Automobile\Models\Carmodel');
    }
}
