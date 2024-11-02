<?php
include("config.php");
if(isset($_POST['sub']))
{
$name = $_POST['name'];
$descr = $_POST['descr'];
$img = $_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
$sql = "INSERT INTO `tbl_blog`(`name`,`descr`,`img`) VALUES ('$name','$descr','$img')";
if(mysqli_query($conn,$sql)){
    header("location:viewblog.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>