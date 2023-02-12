<?php

namespace Attributes;


use Attribute;

#[Attribute]

class TargetEntity
{

    /**
     * Define as an attribute the Targeted Entity for a specific repository later
     */

    private string $entityName;

    public function __construct($entityName)
    {
        $this->entityName = $entityName;
    }

}