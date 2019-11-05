<?php

namespace Laraauto\Automobile\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class CarmodelPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CarmodelTransformer();
    }
}