<?php

namespace Scool\Curriculum\Presenters;

use Scool\Curriculum\Transformers\StudyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class StudyPresenter
 *
 * @package namespace App\Presenters;
 */
class StudyPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new StudyTransformer();
    }
}
