<?php

echo "Auth middleware";
class middlewareUser{
    // checking if user is loged in
    public function checkAuth(){
        if(!isset($_SESSION['loggedin'])){
            redirect('/login');
        }
    }
}