<?php
$dbconnection= new mysqli("localhost", "root","","library");
if($dbconnection){

  
}
else{
    echo $dbconnection->Connect_error;
}
?>