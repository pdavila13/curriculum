<?php

namespace Scool\Curriculum\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Scool\Curriculum\Traits\HasCourses;
use Scool\Curriculum\Traits\HasLaw;


/**
 * Class Study
 *
 * @package Scool\Curriculum\Models
 */
class Study extends Model implements Transformable
{
    use HasLaw,HasCourses,Nameable,TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','law_id'];
}
