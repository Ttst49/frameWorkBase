<?php

namespace App;


class View
{
    /**
     * Managing the templates and what's on screen class
     * It define by a template name and data a specific page to print for user
     */
    public static function render($templateName, $data){

               extract($data);


                    ob_start();
                    require_once ("templates/${templateName}.html.php");

                $pageContent = ob_get_clean();

                ob_start();

                require_once ('templates/base.html.php');

                echo ob_get_clean();
        }
}