<?php

require "./_classes/controller.php";
require "./models/parents.model.php";


class parentsController extends controller {

    // add parent
    public function addNewParents(){
        $parent = new parents();
        $parent -> addParents($_POST['fullname'], $_POST['phone'], $_POST['job'], $_POST['gender'], $_POST['adresse']);
        redirect('/parents');
    }
    // display parent
    public function showAllParents(){
        $Parents = new parents();
        $data = $Parents -> showParents();
        return Route::view("parents", $data);

    }
    // get one parent
    public function showOneParents($id){
        $parent = new parents();
        $data = array (
            "id" => $id
        );
        $tst = $parent -> showOneParents($data['id']);
        return Route::view("editparent", $tst);
    }
    // update parent
    public function updateParent($id){
        $parent = new parents();
        $id = $_POST['parentid'];
        $Parents = $parent -> updateParent($id, $_POST['fullname'], $_POST['phone'], $_POST['job'], $_POST['gender'], $_POST['adresse']);
        redirect('/parents');
    }
    public function deleteParent($id) {
        $parent = new parents();
        $data = array (
            "id" => $id
        );
        $parentgg = $parent -> deleteParent($data['id']);
        redirect('/parents');
    }
}