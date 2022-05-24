<?php

require "_classes/model.php";
class student extends Model{

    public $tableName = "students";

    // add student 
    public function addStudent($fname, $phone, $class, $ide, $gender, $adresse, $email, $dob){
        $sql = "INSERT INTO students VALUES(null, '$fname', '$phone', '$class', '$gender', '$adresse', '$ide', '$email', '$dob')";
        $this->con->query($sql);
    }
    // display students
    public function showStudents($order="ASC"){
        if(!in_array($order,['ASC','DESC']))
            throw new Exception('Invalid value"'.$order. '" for order!');
        $sql = "SELECT * FROM students ORDER BY studentid ".$order;
        $result = $this->con->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // display students search
    public function showStudentsSearch($word, $order="ASC"){
        if(!in_array($order,['ASC','DESC']))
            throw new Exception('Invalid value"'.$order. '" for order!');
        $sql = "SELECT * FROM students WHERE studentname LIKE '%$word%' OR studentphone LIKE '%$word%' OR studentaddress LIKE '%$word%'  ORDER BY studentid ".$order;
        $result = $this->con->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
   
    // edit student
    public function showOneStudent($id){
        $sql = "SELECT * FROM students WHERE  studentid = '$id'";
        $result = $this->con->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function updateStudent($id, $fname, $phone, $class, $ide, $gender, $adresse, $email, $dob, $parent){
        $sql = "UPDATE students SET studentname = '$fname', studentphone = '$phone', studentclass = '$class', 	studentide = '$ide', studentgender = '$gender', studentaddress = '$adresse', studentemail = '$email', studentbirth = '$dob', studentparent = '$parent' WHERE  studentid = $id;";
        $result = $this->con->query($sql);
    }
    // delete student
    public function deleteStudent($id){
        $sql = "DELETE FROM students WHERE studentid = $id";
        $result = $this->con->query($sql);
    }


}