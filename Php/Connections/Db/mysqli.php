<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class mysqli implements connection{
    
    private $servername;
    private $username;
    private $password;
    private $dbname;
    
    protected function connect(){
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname = "";
        
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }
    
}
