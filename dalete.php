<?php
include "connection.php";
if(isset($_GET["ID"])){
    $id = $_GET["ID"];
    

    $deleteQuery = "delete from books where ID = '$id'";
    header("Location:books.php");
    $result = $dbconnection->query(  $deleteQuery);


if($result){
    

}
else{
    echo $dbconnection->connect_error;
}
}
?>