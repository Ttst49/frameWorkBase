<?php

namespace Attributes;

use Attribute;

#[Attribute]
class Table
{
    /**
     * Defining the Table name as an Attribute to use it later as a shortcut
     */

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}