<?php
include("config.php");
if(isset($_POST['apply']))
{
$name = $_POST['name'];
$pos = $_POST['pos'];
$descr = $_POST['descr'];
$img = $_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
$sql = "INSERT INTO `tbl_review`(`name`,`pos`,`descr`,`img`) VALUES ('$name','$pos','$descr','$img')";
if(mysqli_query($conn,$sql)){
    header("location:../index.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>