<?php
// include "connection.php";

// session_start();

// if(isset($_SESSION["Username"])){

// }
// else{
//     header("location:student_admin.php");
// }

?>
<?php
include "connection.php";
if(isset($_POST["submit"])){
    $name = $_POST["Name"];
    $Email = $_POST["email"];
    $number = $_POST["number"];
    $discrip = $_POST["text"];

    $sqlQuery = "INSERT into contact_form(Name, Email, Phone, Discription)
    values('$name', '$Email', '$number', '$discrip')";
    $result = $dbconnection->query($sqlQuery);

    if($result){
        header("location:thanks.php"); 
    }
    else {
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
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>
    <div class ="contact">

    <h1>Contact Us</h1>

    <form method ="post">

    <input type="text" placeholder ="Enter Your Name" name ="Name" required><br><br>
    <input type="text" placeholder ="Enter Your Email" name ="email" required><br><br>
    <input type="text" placeholder ="Enter Your Phone Number" name ="number" required><br><br>
    <input type="text" placeholder ="Enter Your Address" name ="address" required><br><br>
    <textarea name="text" id="area" cols="30" rows="10" placeholder ="Discription" required></textarea><br><br>
    <input type="submit" value ="Submit" class ="subBtn"name ="submit">
</form>
</div>
    </body>
</html>