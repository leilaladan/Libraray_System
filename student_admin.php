<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel ="stylesheet" href ="admin.css">
</head>
<body>
        
            <div class ="form1">
            <h1>Student Login</h1>
            <form method = "POST">
                <input type="text" placeholder = "Username" name= "username" autocomplete ="off" autofocus><br><br>

                <input type="password" placeholder = "Password" name="pass"><br><br>
                <input type ="submit"  class ="formbtn1" value = "Login" name= "submit">
</form>
<?php
include "connection.php";
if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $password = $_POST["pass"];
    $checquery = "select * from student where Username = '$user' and Password = '$password'";
    $test = $dbconnection->query($checquery);
    $row =mysqli_num_rows($test);
    if($row < 1){
        echo "Username or Password incorrect";
    }
    else{
        $_SESSION["Username"] = $user;
        header("location:home.php");

    }
}

?>
</div>
</body>
</html>