
<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Employee</title>    
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="Add_employee.php">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
   <link rel="stylesheet" href="Add_leftemployee.php">
 </head>
 <body>


            <?php

            include "connection.php";

            if(isset($_GET["ID"])){

                $ID = $_GET["ID"];
                $full = $_GET["FullName"];
                $Email = $_GET["Email"];
                $Phone = $_GET["Phone"];
                $address = $_GET["Address"];
            }
            ?>


<div class ="header">
   
   <h1>Library Management</h1>
   <iconify-icon icon="ic:round-menu" class ="icony"></iconify-icon>

<div class ="dashboard">
   <ul>
       <li><a href ="dashboard.php"><iconify-icon icon="clarity:dashboard-solid"></iconify-icon>dashboard</a></li>
       <li><a href ="#"><iconify-icon icon="codicon:symbol-enum-member"></iconify-icon>Members</a></li>
       <li><a href ="#"><iconify-icon icon="ic:outline-local-library"></iconify-icon>Library</a></li>
       <li><a href ="books.php"><iconify-icon icon="material-symbols:menu-book-outline-sharp"></iconify-icon>Books</a></li>
       <li><a href ="students.php"><iconify-icon icon="clarity:notification-solid"></iconify-icon>Students</a></li>
       <li><a href ="#"><iconify-icon icon="mdi:users-group"></iconify-icon>Users Management</a></li>
       <li><a href ="#"><iconify-icon icon="uiw:setting"></iconify-icon>Setting</a></li>
</ul>
</div>
</div>
    <div class ="main1">
        <h1>Student's Form</h1>
    <form method ="post">
        <input type="text" placeholder ="Enter Your ID" name="id"  value=" <?php echo $ID; ?> "><br>
    <input type="text" placeholder ="Enter Full Name" name="Fname"  value=" <?php echo $full;?> "><br>
    <input type="text" placeholder ="Enter Email" name="Email"  value=" <?php echo $Email; ?> "><br>
    <input type="text" placeholder ="Enter Your phone" name="Phone"  value=" <?php echo $Phone; ?> "><br>
    <input type="text" placeholder ="Enter Your Address" name="Address"  value=" <?php echo $address ;?> "><br>
    <input type="submit" placeholder ="Save" class ="savebtn" name="update">
    </form>

</div>

<?php

   include "connection.php";
   
    if(isset($_POST["update"])){
        $ID = $_POST["id"];
        $full = $_POST["Fname"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $address = $_POST["Address"];

    
        $UpdateQuery = "update student_form set FullName ='$full', Email = '$Email', Phone = '$Phone',
       Address = '$address' where ID= '$ID'";
    
    
    
    
      
   $test = $dbconnection->query($UpdateQuery);
         
        if($test){
            
      header("Location: student.php");
        }
        else{
            echo $dbconnection->connect_error;
        }

   }
   ?>
</div>
 </body>
 </html> 