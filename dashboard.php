<?php

// session_start();
// if(isset($_SESSION["Email"])){

// }
// else{
//     header("location:admin.php");
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel = "stylesheet" href ="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>
<div class ="header">
   
    <h1>Library Management</h1>
    <iconify-icon icon="ic:round-menu" class ="icony"></iconify-icon>

 <div class ="dashboard">
    <ul>
        <li><a href ="dashboard.php"><iconify-icon icon="clarity:dashboard-solid"></iconify-icon>dashboard</a></li>
        <!-- <li><a href ="#"><iconify-icon icon="codicon:symbol-enum-member"></iconify-icon>Members</a></li>
        <li><a href ="#"><iconify-icon icon="ic:outline-local-library"></iconify-icon>Library</a></li> -->
        <li><a href ="books.php"><iconify-icon icon="material-symbols:menu-book-outline-sharp"></iconify-icon>Books</a></li>
        <li><a href = "student.php"><iconify-icon icon="clarity:notification-solid"></iconify-icon>Students</a></li>
        <li><a href = "logout.php"><iconify-icon icon="ri:logout-circle-r-line"></iconify-icon></iconify-icon>Logout</a></li>
</ul>
</div>
</div>
<div class ="main2">
    <div class="boxes">
        <div class="box1">
        <iconify-icon icon="material-symbols:card-membership"></iconify-icon>
        <?php
        include "connection.php";
    $sqlCommands = "select count(*) as count from members";
    $result = $dbconnection->query($sqlCommands);
    $data ="";
    if($result){
        while($row = $result->fetch_assoc()){
            $data .= "<h1>". $row["count"]."</h1>"; 
        }
        echo $data;
    }
    else{
        echo $dbconnection->connect_error;
    }
        ?>
        <h1>Total Members</h1>
        </div>
        <div class="box2">
        <iconify-icon icon="twemoji:blue-book"></iconify-icon>
        <?php
        include "connection.php";
    $sqlCommands = "select count(*) as count from books";
    $result = $dbconnection->query($sqlCommands);
    $book ="";
    if($result){
        while($row = $result->fetch_assoc()){
            $book .= "<h1>". $row["count"]."</h1>"; 
        }
        echo $book;
    }
    else{
        echo $dbconnection->connect_error;
    }
        ?>
        <h1>Total Books</h1>
        </div>
        <div class="box3">
        <iconify-icon icon="mdi:account-student-outline"></iconify-icon>
        <?php
        include "connection.php";
    $sqlCommands = "select count(*) as count from student_form";
    $result = $dbconnection->query($sqlCommands);
    $std ="";
    if($result){
        while($row = $result->fetch_assoc()){
            $std .= "<h1>". $row["count"]."</h1>"; 
        }
        echo $std;
    }
    else{
        echo $dbconnection->connect_error;
    }
        ?>
    <h1>Total Students</h1>
        </div>
    </div>

</div>
</body>
</html>