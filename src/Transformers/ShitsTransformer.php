<?php

namespace Scool\Curriculum\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\Curriculum\Models\Shits;

/**
 * Class ShitsTransformer
 * @package namespace App\Transformers;
 */
class ShitsTransformer extends TransformerAbstract
{

    /**
     * Transform the \Shits entity
     * @param \Shits $model
     *
     * @return array
     */
    public function transform(Shits $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
