<?php

namespace controllers;

class HomeController extends Controller {

    public function __construct()
    {
        parent::__construct();

        $this->loadModel("Game", "game");
    }

    public function index()
    {
        $data = [
            "game" => $this->game->modelsGame(),
        ];

        $this->display("index", $data);
    }
}
