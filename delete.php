<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>
    <div class="container1">
        <?php
        include "connection.php";
        $id=$_GET['id'];
        $query="DELETE FROM register WHERE id='$id'";
        $data=mysqli_query($conn, $query);

        if($data){
            echo "<div class='message'>ID number: ".$id." deleted successfully.</div>";
        } else {
            echo "<div class='message'>Failed to delete data!</div>";
        }
        ?>
    </div>
</body>
</html>
<!-- </body>
</html>
<?php
include "connection.php";
// error_reporting(0);
$id=$_GET['id'];
$query="DELETE FROM register WHERE id='$id'";
$data=mysqli_query($conn, $query);

if($data){
    echo "ID number:".$id."deleted successfully";
    

    
}else {
    echo"Failed to delete data!";
}
?> -->