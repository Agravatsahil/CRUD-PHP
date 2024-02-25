<?php
include "connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title"><h1>Registration Form</h1></div>
        <div class="form">
            <form action="#" method="POST">
                <label for="name">Firstname: </label>
                <input type="text" id="firstname"  name="firstname" required><br><br>
                <label for="name">Lastname: </label>
                <input type="text" id="lastname"  name="lastname" required><br><br>
                <label for="name">Email: </label>
                <input type="text" id="email"  name="email" required><br><br>
                <label for="name">Gender: </label>
                <select id="gender" name="gender" required>
                    <option value="">select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select><br><br>
                <label for="name">Password: </label>
                <input type="password" id="password"  name="password" required><br><br>
                <input type="submit" value="REGISTER" name="register"/>
            </form>
        </div>
    </div>
    
</body>
</html>

<?php

if($_POST['register']){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

    $query="INSERT INTO `register` (`firstname`, `lastname`, `email`, `gender`, `password`) VALUES ('$firstname', '$lastname', '$email', '$gender', '$password')";
    $data=mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('successfully registered')</script>";
        // Redirect to another page
        header("Location: login.php");

// <!-- <meta http-equiv="refresh" 
//           content="20; url =http://localhost/encircul/display.php" />  -->


    }
    else{
        echo "failed to register!";
    }
}







?>