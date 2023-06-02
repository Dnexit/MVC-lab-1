<?php

namespace app\core;

class View {

    public $route;
    public $path;
    public $layout = "default";

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'] . "/" . $route['action'];
    }

    public function render($title, $vars = []){
        extract($vars);
        $viewPage = "app/views/$this->path.php";
        $menu = [
            "/" => "Главная",
            "/test" => "Тест по дисциплине",
            "/guest-book" => "Гостевая книга",
            "/blog" => "Мой блог",
        ];

        if( file_exists( $viewPage ) ){
            ob_start();
            require $viewPage;
            $content = ob_get_clean();
            require "app/views/layouts/$this->layout.php";
        } else {
            echo "Не найден вид $this->path";
        }
    }

    public static function redirect($url){
        header("location: $url");
        exit;
    }

    public static function errorCode($code){
        http_response_code($code);
        $errorPage = "app/views/errors/$code.php";
        if( file_exists( $errorPage ) ){
            require $errorPage;
        }
        exit;
    }

}
