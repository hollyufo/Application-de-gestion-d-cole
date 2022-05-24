<?php

require "_classes/model.php";
class parents extends Model{

    public $tableName = "parents";

    // add parent
    public function addParents($fname, $phone, $job, $gender, $adresse){
        $sql = "INSERT INTO parents VALUES(NULL, '$fname', '$phone', '$job', '$gender', '$adresse')";
        $this->con->query($sql);
    }
    // display parents
    public function showParents($order="ASC"){
        $sql = "SELECT * FROM parents";
        $result = $this->con->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // display search parent
    public function showParentsSearch($word, $order="ASC"){
        if(!in_array($order,['ASC','DESC']))
            throw new Exception('Invalid value"'.$order. '" for order!');
        $sql = "SELECT * FROM parents WHERE parentname LIKE '%$word%' ORDER BY parentid ".$order;
        $result = $this->con->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // get one parent
    public function showOneParents($id){
        $sql = "SELECT * FROM parents WHERE parentid = '$id'";
        $result = $this->con->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    // update parent
    public function updateParent($id, $fname, $phone, $job, $gender, $adresse){
        $sql = "UPDATE parents SET parentname = '$fname', parentphone = '$phone', parentjob = '$job', parentgender = '$gender', parentaddress = '$adresse' WHERE parentid = '$id'";
        $test = $this->con->query($sql);
    }
    // delete parent 
    public function deleteParent($id){
        $sql = "DELETE FROM parents WHERE parentid = $id";
        $result = $this->con->query($sql);
    }
}   
