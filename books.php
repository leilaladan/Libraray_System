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
    <title>Books</title>
    <link rel="stylesheet" href="books.css">
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
       <!-- <li><a href ="#"><iconify-icon icon="codicon:symbol-enum-member"></iconify-icon>Members</a></li>
       <li><a href ="#"><iconify-icon icon="ic:outline-local-library"></iconify-icon>Library</a></li> -->
       <li><a href ="books.php"><iconify-icon icon="material-symbols:menu-book-outline-sharp"></iconify-icon>Books</a></li>
       <li><a href = "student.php"><iconify-icon icon="clarity:notification-solid"></iconify-icon>Students</a></li>
       <li><a href = "logout.php"><iconify-icon icon="ri:logout-circle-r-line"></iconify-icon></iconify-icon>Logout</a></li>

</ul>
</div>
</div>
    <div class ="Books">
    <h1><iconify-icon icon="noto:books"></iconify-icon>BOOKS</h1>   
  <button class ="bookbtn"><a href="add_book.php"><iconify-icon icon="material-symbols:add-circle"></iconify-icon>Add Book</a></button>
            </div>
            <div class ="tab">
            <table>
    <th>Book Title</th>
    <th>Book Type</th>
    <th>Author Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Page</th>
    <th>Action</th>
    <!-- <th>Update</th> -->
            <?php
    include "connection.php";
    $sqlQuery = "select * from books";
 $result = $dbconnection->query($sqlQuery);
 $table = "";
 if($result){
    while ($row  = $result->Fetch_assoc()){
           $table .= "<tr>";
            $table .= "<td>".$row["BookTitle"]."</td>";
            $table .= "<td>".$row["BookType"]."</td>";
            $table .= "<td>".$row["AuthorName"]."</td>";
            $table .= "<td>".$row["Quantity"]."</td>";
            $table .= "<td>".$row["Price"]."</td>";
            $table .= "<td>".$row["Pages"]."</td>";
            $deleteLink = "dalete.php?". "&ID=".$row["ID"];
            $table .= "<td>".'<a href ="'.$deleteLink.'" class ="deletebtn"><iconify-icon icon="ic:baseline-delete" class ="icony"></iconify-icon></a>'."</td>";
        }
        echo $table;
        
       }
       else{
           echo $dbconnection->connect_error;
       }


            ?>
             </table>
</div>
</body>
</html>