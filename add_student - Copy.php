<?php
include "connection.php";


if(isset($_POST["Submit"])){
    $ID = $_POST["id"];
    $full = $_POST["Fname"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $address = $_POST["Address"];

    $sqlCommands = "INSERT into student_form (ID, FullName, Email, Phone, Address)
    values('$ID', '$full', '$Email', '$Phone', '$address') ";




    $names = $dbconnection->query($sqlCommands);
     
    if($names){
     header ("location:student.php");
    }
    else{
        echo $dbconnection->connect_error;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_student</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>
<div class ="header">
   
   <h1>Library Management</h1>
   <iconify-icon icon="ic:round-menu" class ="icony"></iconify-icon>

<div class ="dashboard">
   <ul>
       <li><a href ="dashboard.php"><iconify-icon icon="clarity:dashboard-solid"></iconify-icon>dashboard</a></li>
       <li><a href ="#"><iconify-icon icon="codicon:symbol-enum-member"></iconify-icon>Members</a></li>
       <li><a href ="#"><iconify-icon icon="ic:outline-local-library"></iconify-icon>Library</a></li>
       <li><a href ="books.php"><iconify-icon icon="material-symbols:menu-book-outline-sharp"></iconify-icon>Books</a></li>
       <li><a href ="student.php"><iconify-icon icon="clarity:notification-solid"></iconify-icon>Students</a></li>
       <li><a href = "logout.php"><iconify-icon icon="ri:logout-circle-r-line"></iconify-icon></iconify-icon>Logout</a></li>

</ul>
</div>
</div>
    <div class ="main1">
        <h1>Student's Form</h1>
    <form method ="post">
        <input type="number" placeholder ="Enter Your ID" name ="id"><br>
    <input type="text" placeholder ="Enter Full Name" name ="Fname"><br>
    <input type="Email" placeholder ="Enter Email" name ="Email"><br>
    <input type="number" placeholder ="Enter Your phone" name ="Phone"><br>
    <input type="text" placeholder ="Enter Your Address" name ="Address"><br>
    <input type="submit" placeholder ="Save" class ="savebtn" name="Submit">
    </form>

</div>
</body>
</html>