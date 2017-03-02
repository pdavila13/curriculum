<?php

namespace Scool\Curriculum\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ShitsRepository;
use App\Entities\Shits;
use App\Validators\ShitsValidator;

/**
 * Class ShitsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ShitsRepositoryEloquent extends BaseRepository implements ShitsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Shits::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ShitsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
