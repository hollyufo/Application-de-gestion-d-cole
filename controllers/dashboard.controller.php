<?php

require "./_classes/controller.php";
require "./models/dashboard.model.php";


class dashboardController extends controller {

    // index method
    public function index(){
        $dashboard = new dashboard();
        $data = array (
            "users" => $dashboard -> countAdmins(),
            "parents" => $dashboard -> countParents(),
            "students" => $dashboard -> countStudents(),
            "teachers" => $dashboard -> countTeachers()
        );
        return Route::view("dashboard", $data);
    }
}   