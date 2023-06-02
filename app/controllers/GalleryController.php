<?php

namespace app\controllers;

use app\core\Controller;

class GalleryController extends Controller
{
    private $photoNames;

    public function indexAction(){
        $photoNames = $this->model->getPhotoNames();

        $vars = [
            "photoNames" => $photoNames,
            "menuIndex" => 5
        ];

        $this->view->render("Фотографии", $vars);
    }

}