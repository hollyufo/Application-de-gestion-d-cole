<?php

    class dashboard extends Model{

        public $tableName = [
            "users" => "users",
            "parents" => "parents",
            "students" => "students",
            "teachers" => "teachers"
        ];

        // public $tableName = 'teachers';

        public function countAdmins(){
            $sql = "SELECT * FROM users";
            $result = $this->con->query($sql);
            return $result->rowCount();
        }

        public function countParents(){
            $sql = "SELECT * FROM parents";
            $result = $this->con->query($sql);
            return $result->rowCount();
        }

        public function countStudents(){
            $sql = "SELECT * FROM students";
            $result = $this->con->query($sql);
            return $result->rowCount();
        }

        public function countTeachers(){
            $sql = "SELECT * FROM teachers";
            $result = $this->con->query($sql);
            return $result->rowCount();
        }
    }