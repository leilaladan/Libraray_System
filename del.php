<?php
include "connection.php";
if(isset($_GET["ID"])){
    $id = $_GET["ID"];
    

    $deleteQuery = "delete from student_form where ID = '$id'";
    header("Location:student.php");
    $result = $dbconnection->query(  $deleteQuery);


if($result){
    

}
else{
    echo $dbconnection->connect_error;
}
}
?>