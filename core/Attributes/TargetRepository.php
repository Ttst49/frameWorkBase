<?php

namespace Attributes;

use Attribute;

#[Attribute]
class TargetRepository
{

    /**
     * Define as an attribute the targeted Repository for specific Entity Later
     */

    private string $repositoryName;

    public function __construct($repositoryName)
    {
        $this->repositoryName = $repositoryName;
    }
}