<?php
session_start();  // Starting Session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Login Form</h1>
        <form class="login-form" action="#" method="POST">
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login" name="login">
        </form>
        <div class="register-link"> 
            <a href="index.php" >Don't have an account? Register here.</a>
    </div>
       
    </div>
</body>
</html>
<?php
include "connection.php";

if(isset( $_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $query="SELECT * FROM register WHERE email='$email' && password='$pass'";
    $data=mysqli_query($conn,$query);

    $total=mysqli_num_rows($data);
    // echo $total;

    if($total == 1){
        // echo "login ok";
        $_SESSION['email'] = $email;//session
        header('Location:display.php');

    }else
    {
        header('Location:login.php');
        // echo "login failed";
    }
}


?>