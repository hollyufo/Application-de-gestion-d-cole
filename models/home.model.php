<?php

class home extends Model{
    public $tableName;

    // add user 
    public function addUser($data){
        $this->db->insert($this->tableName, $data);
    }
}