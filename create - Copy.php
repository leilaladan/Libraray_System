<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css">
    <title>REGISTRATION</title>
</head>
<body>
    <div class="create">
        <form method ="POST">
    <H1>Regestration</H1>
    <label >Full Name</label><br>
    <input type="text" placeholder = "Enter You Full Name" required name ="Fname"><br>
    <label >Username</label><br>
    <input type="text"  placeholder = "Enter Username" required name ="userName"><br>
    <label >Email</label><br>
    <input type="email" placeholder ="Enter Your Email" required name = "email"><br>
    <label >Phone Number</label><br>
    <input type="number" placeholder = "Enter Your Phone" required name = "number"><br>
    <label for="">Address</label><br>
    <input type="text" placeholder ="Enter Address" required name = "address"><br><br>
    <input type="submit" value = "Save" name = "save" class ="submitbtn">
        </form>
    </div>
    <?php
    include "connection.php";
    if(isset($_POST["save"])){
        $name = $_POST["Fname"];
        $user = $_POST["userName"];
        $email = $_POST["email"];
        $num = $_POST["mumber"];
        $addre = $_POST["address"];
        $sqlCommands = "INSERT into student(Name, Username, Email, Number, Address)
        values('$name', '$user', '$email', '$num', '$addre')";

        $result = $dbconnection->query($sqlCommands);

        if($result){
            header("location:home.php");
        }
        else{
           echo $dbconnection->connect_error;
        }

    }

?>
</body>
</html>