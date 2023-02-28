<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
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
    <h1>Student's Data</h1>   
  <button class ="bookbtn"><a href="add_student.php"><iconify-icon icon="material-symbols:add-circle"></iconify-icon>Add Student</a></button>
            </div>
            <div class ="tab">
            <table>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Action</th>
    <th>Update</th>
   
   


            <?php
    include "connection.php";
    $sqlQuery = "select * from student_form";
 $result = $dbconnection->query($sqlQuery);
 $table = "";
 if($result){
    while ($row  = $result->fetch_assoc()){
           $table .= "<tr>";
           $table .= "<td>".$row["ID"]."</td>";
            $table .= "<td>".$row["FullName"]."</td>";
            $table .= "<td>".$row["Email"]."</td>";
            $table .= "<td>".$row["Phone"]."</td>";
            $table .= "<td>".$row["Address"]."</td>";
            $deleteLink = "del.php?". "&ID=".$row["ID"];
            $table .= "<td>".'<a href ="'.$deleteLink.'" class ="deletebtn">Delete</a>'."</td>";
            $updateLink = "update.php?"."&ID=".$row["ID"]."&FullName=".$row["FullName"]."&Email=".$row["Email"].
            "&Phone=".$row["Phone"]."&Address=".$row["Address"];
            $table .= "<td>".'<a href ="'.$updateLink.'" class ="updatetebtn">Update</a>'."</td>";
          
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