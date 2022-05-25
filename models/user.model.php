<?php

require "_classes/model.php";
class user extends Model{

    public $tableName = "users";

    // verify user credentials
    public function verifyUser($useremail, $password){
        $sql = "SELECT * FROM users WHERE useremail = '$useremail'";
        $result = $this->con->query($sql);
        if($result->rowCount() > 0){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $row['password'])){
                $_SESSION['useremail'] = $useremail;
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['loggedin'] = true;
                return true;
            }else{  
                return false;
            }
        }else{
            return false;
        }
    }
    // add user to the database
    public function addUser($fullname, $email, $password, $role, $matricule){
        // hashing password
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users VALUES (null, '$fullname', '$email', '$password', '$role', '$matricule')";
        $this->con->query($sql);
    }
    // get all users
    public function getUsers(){
        $sql = "SELECT * FROM users";
        $result = $this->con->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // delete user
    public function deleteUser($userid){
        $sql = "DELETE FROM users WHERE userid = '$userid'";
        $this->con->query($sql);
    }
}