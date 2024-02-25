<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY IMG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$query="SELECT * FROM fileupload";
$data=mysqli_query( $conn , $query); 

$total= mysqli_num_rows($data) ;

if($total != 0){
    
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<div class='uploaded-image'>";
        echo "<img src='".$result['image']."' alt='uploaded file' height='200px' width='200'>" ;
        echo "</div>";
    }
}
else 
    {
    echo "No Data Found";
    }

?>
