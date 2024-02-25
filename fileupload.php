<?php
include "connection.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileUpload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileupload" id="fileupload"><br><br>

        <input type="submit" value="UPLOAD FILE" name="uploadfile">
    </form>
</body>
</html>
<?php



if($_POST['uploadfile']){
    $filename=$_FILES['fileupload']['name'];
    $tmpfile=$_FILES['fileupload']['tmp_name'];
    $folder="images/".$filename;
    // echo $folder.$filename;
    move_uploaded_file($tmpfile, $folder) ; 
    echo "<script>alert('Your File has  been uploaded successfully')</script>";
    // print_r($fileupload)
    
    // echo "<img src='$folder' alt='uploaded file' height='200px' width='200'>";

    $query="INSERT INTO `fileupload` (`image`) VALUES ('$folder')";
    $data=mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('successfully file upload to database')</script>";
        header('location:displayimg.php');
    }
    }
?>
