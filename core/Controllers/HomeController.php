<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Attributes\UsesEntity;
use Entity\AbstractEntity;


#[UsesEntity(value: false)]
class HomeController extends AbstractController
{

    /**
     * Base Controller that only render the landing page as the documentation of the FrameWork
     */


    public function index()
    {

        return $this->render("home/index", ["pageTitle"=>"home"]);
    }

}