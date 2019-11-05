<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class AccessoryPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AccessoryTransformer();
    }
}