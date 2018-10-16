<?php

namespace \Php\Model;

use \Php\Connection as Conn;

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
class User {

    private $conn;
    private $table = 'user';

    //put your code here
    public function __construct(Conn $conn) {

        $this->conn;
    }

    public function getAllUser() {

        $stmt = $this->conn()->prepare('SELECT * FROM ' . $this->table);
        $stmt->execute($sql);
        $result = $stmt->get_result();
        $numRows = $result->num_rows;
        if($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
       
    }

    public function getUser($id) {

        $stmt = $this->conn()->prepare('SELECT * FROM ' . $this->table . ' WHERE user_id = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute($sql);
        $result = $stmt->get_result();
        return $result;
    }

    public function deleteUser($id) {
        $stmt = $this->conn()->prepare('DELETE FROM ' . $this->table . ' WHERE user_id = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute($sql);
        $result = $stmt->get_result();
        return $result;
    }

    public function addUser($name, $age) {

        $stmt = $this->conn()->prepare('INSERT INTO ' . $this->table . ' (name, age) VALUES (?, ?)');
        $stmt->bind_param('si');
        $stmt->execute();

        if ($this->db->execute()) {
            $id = $this->conn()->insert_id;
            return $id;
        } else {
            return false;
        }

    }

    public function updateUser($name, $age) {

        $stmt = $this->conn()->prepare('UPDATE ' . $this->table . ' SET name=?, age=? WHERE user_id = ?');
        $stmt->bind_param('sii', $name, $age, $id);
        $stmt->execute($sql);
        $result = $stmt->get_result();
        return $result;
    }

}
