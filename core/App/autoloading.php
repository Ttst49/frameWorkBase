<?php
/**
 Require_Once automation by auto charging from ClassName
 */

spl_autoload_register(
    function($className){
        $className = str_replace("\\", "/", $className);

        require_once "core/{$className}.php";

    }
);