<?php

require "./_classes/controller.php";

class userController extends controller{

    // the function we were called from the route
    public function index(){
        
    }
    public $id;
    public $username;
    public $password;
    public $created_at;
    public $last_login;

    // sanitize user input
    public function sanitize($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // login user and redirect to home page
    public function user(){
        $this->username = $this->sanitize($_POST['email']);
        $this->password = $this->sanitize($_POST['password']);
        
        echo 'test';
        
        // if($result->num_rows > 0){
        //     $row = $result->fetch_assoc();
        //     if(password_verify($this->password, $row['password'])){
        //         session_start();
        //         $_SESSION['username'] = $this->username;
        //         $_SESSION['id'] = $row['userid'];
        //         $_SESSION['created_at'] = $row['signup'];
        //         $_SESSION['last_login'] = $row['lastonline'];
        //         $_SESSION['logged_in'] = true;
        //         header('location: contact.php');
        //         // updating last login
        //         $this->last_login = date(DATE_RFC822);
        //         $sql = "UPDATE users SET lastonline = '$this->last_login' WHERE username = '$this->username'";
        //         $result = $this->connect()->query($sql);
        //         return true;
        //     }else{  
        //         header('location: login.php?password=error');
        //     }
        // }else{
        //     header('location: login.php?error=username');
        // }
    }

    // you can create and call more functions according to your needs 
}