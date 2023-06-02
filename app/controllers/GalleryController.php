<?php

namespace app\controllers;

use app\core\Controller;

class GalleryController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Фотографии", $vars);
    }

}