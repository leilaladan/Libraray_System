<?php
include "connection.php";


if(isset($_POST["Submit"])){
    $book = $_POST["book"];
    $type = $_POST["type"];
    $author = $_POST["author"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $page = $_POST["page"];

    $sqlCommands = "INSERT into books(BookTitle, BookType, AuthorName, Quantity, Price, Pages)
    values('$book', '$type', '$author', '$quantity', '$price', '$page') ";




    $result = $dbconnection->query($sqlCommands);
     
    if($result){
   header ("location:books.php");
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
    <title>Add_Book</title>
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="style.css">
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
       <li><a href = "student.php"><iconify-icon icon="clarity:notification-solid"></iconify-icon>Students</a></li>
       <li><a href = "logout.php"><iconify-icon icon="ri:logout-circle-r-line"></iconify-icon></iconify-icon>Logout</a></li>

</ul>
</div>
</div>
<div class ="main1">
        <h1>New Book</h1>
    <form method ="post">
        <input type="text" placeholder ="Book Title" name ="book"><br>
    <input type="text" placeholder ="Book Type" name ="type"><br>
    <input type="text" placeholder ="Author Name" name ="author"><br>
    <input type="number" placeholder ="Quantity" name ="quantity"><br>
    <input type="number" placeholder ="Price" name ="price"><br>
    <input type="number" placeholder ="Pages" name ="page"><br>
    <input type="submit" placeholder ="add" class ="addbtn" name="Submit">
    </form>

</div>
</body>
</html>