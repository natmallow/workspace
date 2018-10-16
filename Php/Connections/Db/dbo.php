<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dbo implements connection {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname = "";
        $this->charset = "utf8mb4";

        /**
         * to check for available drivers use
         * var_dump(PDO::getAvailableDrivers());
         * in this case we are using mysql 
         */
        try {
            $dataSourceName = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($dataSourceName, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection Failed ".$e->getMessage();
        }
    }

}
