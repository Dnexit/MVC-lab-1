<?php

namespace app\models;

use app\core\Model;

class GalleryModel extends Model {
    private $photoNames;

    public function generatePhotoNames(){

        $this->photoNames["public/img/gallery/(1).jpg"] = "котик в маске";
        $this->photoNames["public/img/gallery/(2).jpg"] = "удивлённый кот";
        $this->photoNames["public/img/gallery/(3).jpg"] = "уставший котёнок";
        $this->photoNames["public/img/gallery/(4).jpg"] = "котик смотрит вниз";
        $this->photoNames["public/img/gallery/(5).jpg"] = "задумчивый котик";
        $this->photoNames["public/img/gallery/(6).jpg"] = "виноватый котёнок";
        $this->photoNames["public/img/gallery/(7).jpg"] = "злые котики";
        $this->photoNames["public/img/gallery/(8).jpg"] = "крутые коты";
        $this->photoNames["public/img/gallery/(9).jpg"] = "кенгуру";
        $this->photoNames["public/img/gallery/(10).jpg"] = "кролик";
        $this->photoNames["public/img/gallery/(11).jpg"] = "утёнок";
        $this->photoNames["public/img/gallery/(12).jpg"] = "слон";
        $this->photoNames["public/img/gallery/(13).jpg"] = "котик в смешной шляпе";
        $this->photoNames["public/img/gallery/(14).jpg"] = "котик с радугой";
        $this->photoNames["public/img/gallery/(15).jpg"] = "белые мишки";
    }

    public function getPhotoNames() {
        $this->generatePhotoNames();
        return $this->photoNames;
    }
}