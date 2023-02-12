<?php

namespace Attributes;


use Attribute;

#[Attribute]

class DefaultEntity
{
    /**
     * Defining the entityName as an Attribute to use it for specific Controller
     */
    private string $entityName;

    public function __construct($entityName)
    {
        $this->entityName = $entityName;
    }

}