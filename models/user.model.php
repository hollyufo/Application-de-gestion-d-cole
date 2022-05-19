<?php

require "_classes/model.php";

class user extends Model{

    public $tableName = "users";

    // constructor to conect to database
    public function __construct(){
        $this->host = "localhost";
        $this->dbName = "school";
        $this->username = "root";
        $this->password = "";
        $this->con = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8', $this->username, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return true;
    }
    // finding user in database
    public function findUser($username){
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->con->query($sql);
        if($result->rowCount() > 0){
            return ;
        }else{
            return false;
        }
    }

}