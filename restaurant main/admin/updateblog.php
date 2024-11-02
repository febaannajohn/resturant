<?php
include("config.php");
if(isset($_POST['sub']))
{
    $id=$_GET['id'];
    $name = $_POST['name'];
    $descr = $_POST['descr'];
  
   
$img = $_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
$sql = "UPDATE `tbl_blog` SET `name`='$name',`descr`='$descr',`img`='$img' WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
    header("location:viewblog.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>