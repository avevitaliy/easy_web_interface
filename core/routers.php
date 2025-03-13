<?php

class Route {

    function __construct() {

    }
    public static function Start() {
        //назначение параметров по умолчанию
        $router = 'index';
        $action = 'index';
        //$action_parameters = array();

        // преобразуем строку запроса в массив
        $route_array = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($route_array['1'])) {
            $router = $route_array['1'];
        }
        if(!empty($route_array['2'])) {
            $action = $route_array['2'];
        }

        if(file_exists(Q_PATH.'/routers/'.$router.'/main.php')) {
            include Q_PATH.'/core/template.php';
            exit;
        }
        else {
            $router = '/../core/404';
            include Q_PATH.'/core/template.php';
        }

    }


}