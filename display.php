<?php
include "connection.php";
session_start();
// echo "WELCOME , ". $_SESSION['email']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php

$user=$_SESSION['email'];
if($user==true){

}else{
    header('location:login.php');
}

$query="SELECT * FROM register";
$data=mysqli_query( $conn , $query); 

$total= mysqli_num_rows($data) ;

if($total != 0){
    ?>

    <div class="table">
    <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Password</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                </thead>
    <?php            
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr><tbody>
                    <td>".$result['id'] ."</td>
                    <td>".$result['firstname'] ."</td>
                    <td>".$result['lastname'] ."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['password'] ."</td>
                    <td>". "<a href='update.php?id=$result[id]'>"."<button >UPDATE</button>"."</a>". "</td>
                    <td>".  "<a href='delete.php?id=$result[id]'>"."<button>DELETE</button>"."</a>" ."</td>
               </tr><tbody> ";
    }
}
else 
    {
    echo "No Data Found";
    }

?>
     </div>   
 </table>
 <a href="logout.php"><input type="submit" value="LOGOUT" name="logout"/ ></a></br>
