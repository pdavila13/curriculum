<?php

namespace Scool\Curriculum\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Scool\Curriculum\Traits\HasManyStudies;


/**
 * Class Law
 *
 * @package Scool\Curriculum\Models
 */
class Law extends Model
{
    use HasManyStudies,Nameable;

    const LOE = "LOE";
    const LOGSE = "LOGSE";

    const LOE_NAME = "Ley Orgánica de Educación";
    const LOGSE_NAME = "Ley Orgánica general del Sistema Educativo";
}
