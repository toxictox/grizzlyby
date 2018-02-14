<?php

class Model extends PDO {


    public function __construct($username = "root", $password = "121212", $host = "localhost", $dbname = "grizzlyby", $options = []) {

        $dns = "mysql:host={$host}; dbname={$dbname}; charset=utf8";
        parent::__construct($dns, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

}
