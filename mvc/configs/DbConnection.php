<?php 

namespace configs;

class DbConnection {
    public function connect () 
    {
        $connDB = mysqli_connect('localhost', 'root', 'root', 'mvs');
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_errno();
            exit();
        }
        return $connDB;
    }
}