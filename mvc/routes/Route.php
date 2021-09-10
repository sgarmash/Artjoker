<?php

namespace routes;

use \configs\Hash;

class Route {

    private static $instance;

    private $routes;

    private function __construct()
    {
        $this->routes = Hash::getRoutes();
    }

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function load(){

        if(isset($this->routes[$_SERVER["REQUEST_URI"]][$_SERVER["REQUEST_METHOD"]])){
            $data = $this->routes[$_SERVER["REQUEST_URI"]][$_SERVER["REQUEST_METHOD"]];
            (new $data["controller"])->{$data["action"]}();
        }else{
            header("HTTP/1.1 404 Not Found");
            require_once("404.php");
        }
    }
}