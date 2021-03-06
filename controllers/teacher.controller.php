<?php

require "./_classes/controller.php";
require "./models/teacher.model.php";


class teacherController extends controller {

    // add teacher
    public function addNewTeacher(){
        $teacher = new teacher();
        $teacher -> addteacher($_POST['fullname'], $_POST['phone'], $_POST['class'], $_POST['matricule'], $_POST['gender'], $_POST['subject']);
        redirect('/teachers');
    }
    // display teachers
    public function showAllTeachers(){
        $teachers = new teacher();
        if (isset($_GET['word'])) {
            $data = $teachers -> showTeachersSearch($_GET['word'],$_GET['o']??'ASC');
        } else {
            $data = $teachers -> showTeachers($_GET['o']??'ASC');
        }
        return Route::view("teachers", $data);
    }
    // update teacher 
    public function showOneTeacher($id){
        $teachers = new teacher();
        $data = array (
            "id" => $id
        );
        $teacher = $teachers -> showOneTeacher($data['id']);
        return Route::view("editteacher", $teacher);
    }
    // update teacher
    public function updateTeacher($id){
        $teacher = new teacher();
        $id = $_POST['teacherid'];
        $test = $teacher -> updateTeacher($id, $_POST['fullname'], $_POST['phone'], $_POST['class'], $_POST['matricule'], $_POST['gender'], $_POST['subject']);
        redirect('/teachers');
    }
    // delete teacher 
    public function deleteTeacher($id) {
        $teachers = new teacher();
        $data = array (
            "id" => $id
        );
        $teacher = $teachers -> deleteTeacher($data['id']);
        redirect('/teachers');
    }
}