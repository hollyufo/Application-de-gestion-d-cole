<?php

require "./_classes/controller.php";
require "./models/user.model.php";


class userController extends controller{

    // the function we were called from the route
    public function login(){
        // calling login method from the model
        $user = new user();
        $userdata = $user->verifyUser($_POST['email'], $_POST['password']);
        if($userdata){
            redirect('/dashboard');
        }else{
            redirect('/login');
        }
        //var_dump($_SESSION);
        //var_dump($userdata);
    }
    // login out
    public function logout(){
            session_destroy();
            redirect('./login');
    }
    
}