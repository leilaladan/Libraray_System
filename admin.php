
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>


<div class ="form1">
<h1>Admin Login</h1>
        <form method ="POST">
       
            <input type="email" placeholder="Your Email"name="Email" autocomplete ="off" autofocus><br><br>

            <input type="password" placeholder="Your Password" name="password"><br><br>
            <input type = "submit" class ="formbtn1" value ="Login" name="LoginBtn">
        <h3>Forget Password?</h3>
        </form>
      
</form>
<?php
include "connection.php";
if(isset($_POST["LoginBtn"])){
    $email = $_POST["Email"];
    $pass = $_POST["password"];
    $checkQuery ="select * from admin1 where Email = '$email' and Password = '$pass'";
    $result =$dbconnection->query($checkQuery);

    $row =mysqli_num_rows($result);
    if($row < 1){
        echo "Email or Password incorrected";
    }
    else{
        $_SESSION["Email"] =$email;
        header ("location:dashboard.php");
    }
}
?>

</div>

</body>
</html>