<?php

namespace Scool\Curriculum\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use nameable;

    protected $fillable = ['name'];
}
