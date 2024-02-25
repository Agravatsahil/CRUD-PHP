<?php
session_start();  // Starting Session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
</head>
<body>
    
</body>
</html>
<?php
include "connection.php";
error_reporting(0);
$id=$_GET['id'];
//sessoin
$user=$_SESSION['email'];
if($user==true){

}else{
    header('location:login.php');
}

$query="SELECT * FROM register WHERE id='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows( $data ); 
$result=mysqli_fetch_assoc( $data ); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title"><h1>Update form</h1></div>
        <div class="form">
            <form action="#" method="POST">
                <label for="name">Firstname: </label>
                <input type="text" id="firstname"  name="firstname" value="<?php echo $result['firstname']; ?>" required><br><br>
                <label for="name">Lastname: </label>
                <input type="text" id="lastname"  name="lastname" value="<?php echo $result['lastname']; ?>" required><br><br>
                <label for="name">Email: </label>
                <input type="text" id="email"  name="email" value="<?php echo $result['email']; ?>" required><br><br>
                <label for="name">Gender: </label>
                <select id="gender" name="gender"  required>
                    <option value="">select</option>
                    <option value="male" <?php if($result['gender']=='male'){
                        echo "selected";
                    }  ?>>Male</option>
                    <option value="female"<?php if($result['gender']=='female'){
                        echo "selected";
                    }  ?>>Female</option>
                    <option value="other"<?php if($result['gender']=='other'){
                        echo "selected";
                    }  ?>>Other</option>
                </select><br><br>
                <label for="name">Password: </label>
                <input type="password" id="password"  name="password" value="<?php echo $result['password']; ?>" required><br><br>
                <input type="submit" value="UPDATE" name="register"/>
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

    // $query="INSERT INTO `register` (`firstname`, `lastname`, `email`, `gender`, `password`) VALUES ('$firstname', '$lastname', '$email', '$gender', '$password')";
    $query="UPDATE register SET firstname='$firstname',lastname='$lastname',email='$email',gender='$gender',password='$password'WHERE id='$id'";
    $data=mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Update data successfully')</script>";
        header("Location: display.php");
    }
    else{
        echo "failed to update!";
    }
}







?>