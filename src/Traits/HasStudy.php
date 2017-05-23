<?php

namespace Scool\Curriculum\Traits;

use Scool\Curriculum\Models\Study;


/**
 * Trait HasStudy
 *
 * @package Scool\Curriculum\Traits
 */
trait HasStudy
{
    /**
     * Get the study that owns the module.
     */
    public function study()
    {
        return $this->belongsTo(Study::class)->withTimestamps();
    }
}