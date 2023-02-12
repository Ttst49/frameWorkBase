<?php

namespace Attributes;

use Attribute;

#[Attribute]
class UsesEntity
{

    /**
     * Define as an attribute if Entity is used for specific Controller by answering with Booleans
     */

    private bool $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

}