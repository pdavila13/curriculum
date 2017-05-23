<?php

namespace Scool\Curriculum\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Scool\Curriculum\Traits\HasStudies;


/**
 * Class Course
 *
 * @package Scool\Curriculum\Models
 */
class Course extends Model
{
    use HasStudies, Nameable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
