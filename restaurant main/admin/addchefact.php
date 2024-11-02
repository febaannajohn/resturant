<?php
include("config.php");
if(isset($_POST['sub']))
{
$name = $_POST['name'];
$pos = $_POST['pos'];
$img = $_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
$sql = "INSERT INTO `tbl_chef`(`name`,`pos`,`img`) VALUES ('$name','$pos','$img')";
if(mysqli_query($conn,$sql)){
    header("location:viewchef.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>