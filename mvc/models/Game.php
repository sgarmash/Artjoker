<?php

namespace models;

use \configs\DbConnection;

class Game {
    public function modelsGame()
    {
        $connDB = new DbConnection();
        $conn = $connDB->connect();
        $result = mysqli_query($conn, "SELECT * FROM `game`");
        return $result;
    }
}