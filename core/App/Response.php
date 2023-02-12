<?php

namespace App;

class Response
{
    /**
     * Automation of the redirection by passing params for precise location
     * Return to landing page if params are null
     */

    public static function redirect(? array $params = null){

        $url = "index.php";

        if($params){

            //[ "type"=>"posts", "action"=>"show", "id"=>23]

            $url = "?";

            foreach ($params as $paramName=>$paramValue){

                // type=posts&
                $newParam = $paramName."=".$paramValue."&";
                $url.=$newParam;

            }

        }

        header("Location: ${url}");
        exit();

    }
}