<?php

namespace \Php\View;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Peacful
 */
class User extends --- {
    //put your code here
    
    public function showAllUser(){
        $datas = $this->getAllUsers();
        foreach ($data as $key) {
            echo $key['---']
        }
    }
}
