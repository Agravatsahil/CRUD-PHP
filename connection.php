<?php

$servername= "localhost";  
$username = "root"; 
$password = "";
$dbname="crud_php";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if($conn){
        // echo "OK";
}
else{
    echo "connection failed";
}

?>