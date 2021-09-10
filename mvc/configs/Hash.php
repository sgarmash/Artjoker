<?php

namespace configs;

class Hash {
    public static function getRoutes() 
    {
        return [
            "/" => [
                "GET" => [
                    "controller" => "\\controllers\\HomeController",
                    "action" => "index",
                ]
            ]
        ];
    }
}