<?php

require "_classes/model.php";
class teacher extends Model{

    public $tableName = "teachers";

    // add teacher 
    public function addTeacher($fname, $phone, $class, $ide, $gender, $subject){
        $sql = "INSERT INTO teachers VALUES(NULL, '$fname', '$phone', '$class', '$ide', '$gender', '$subject')";
        $this->con->query($sql);
    }
    // display teachers
    public function showTeachers(){
        $sql = "SELECT * FROM teachers";
        $result = $this->con->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // edit teacher
    public function showOneTeacher($id){
        $sql = "SELECT * FROM teachers WHERE teacherid = '$id'";
        $result = $this->con->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function updateTeacher($id, $fname, $phone, $class, $ide, $gender, $subject){
        $sql = "UPDATE teachers SET teachername = '$fname', teacherphone = '$phone', teacherclass = '$class', teacheride = '$id', teachergender = '$gender', teachersubject = '$subject' WHERE teacherid = $id;";
        $result = $this->con->query($sql);
    }
    // delete teacher
    public function deleteTeacher($id){
        $sql = "DELETE FROM teachers WHERE teacherid = $id";
        $result = $this->con->query($sql);
    }
}   