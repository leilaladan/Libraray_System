<?php

// session_start();
// if(isset($_SESSION["Username"])){

// }
// else{
//     header("location:student_admin.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Part</title>
    <link rel="stylesheet" href="books.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="HOME.CSS">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       

    
</head>
<body>
    <div class ="header">

    <h1>Library Management</h1>
   

 <div class ="home">
    <ul>
      
        <li><a href ="home.php">Request Book</a></li>
        <li><a href ="logout.php">Logout</a></li>
     
</ul>
</div>
<iconify-icon icon="ic:round-menu" class ="icony"></iconify-icon>
</div>
<div class ="Book">
    <h1><iconify-icon icon="noto:books"></iconify-icon>BOOKS</h1>   
  <!-- <button class ="bookbtn"><a href="add_book.php"><iconify-icon icon="material-symbols:add-circle"></iconify-icon>Add Book</a></button> -->
            </div>
            <div class ="tabl">
            <table>
    <th>Book Title</th>
    <th>Book Type</th>
    <th>Author Name</th>
    <th>Price</th>
    <th>Pages</th>
    <th>Request</th>
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
            $table .= "<td>".$row["Price"]."</td>";
            $table .= "<td>".$row["Pages"]."</td>";
            $requestLink = "contact.php";
            $table .="<td>".'<a href ="'.$requestLink.' "class ="requestbtn">Request</a>';
            $table.= "</tr>";

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