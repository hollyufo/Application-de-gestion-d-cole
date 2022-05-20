<?php

require "./_classes/controller.php";
require "./models/student.model.php";


class studentController extends controller {

    // add student
    public function addNewStudent(){
        $student = new student();
        $student -> addStudent($_POST['fullname'], $_POST['phone'], $_POST['class'], $_POST['matricule'], $_POST['gender'], $_POST['adresse'], $_POST['email'], $_POST['dob'], $_POST['parent']);
        redirect('/students');
    }
    // display students
    public function showAllStudents(){
        $students = new student();
        $data = $students -> showStudents();
        return Route::view("students", $data);

    }
    // update student 
    public function showOneStudent($id){
        $students = new student();
        $data = array (
            "id" => $id
        );
        $student = $students -> showOneStudent($data['id']);
        return Route::view("editstudent", $student);
    }
    // update student
    public function updateStudent($id){
        $student = new student();
        $id = $_POST['studentId'];
        $student -> updateStudent($id, $_POST['fullname'], $_POST['phone'], $_POST['class'], $_POST['matricule'], $_POST['gender'], $_POST['adresse'], $_POST['email'], $_POST['dob'], $_POST['parent']);
        redirect('/students');
    }
    // delete student 
    public function deleteStudent($id) {
        $students = new student();
        $data = array (
            "id" => $id
        );
        $student = $students -> deleteStudent($data['id']);
        redirect('/students');
    }
}