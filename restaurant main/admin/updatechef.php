<?php
include("config.php");
if(isset($_POST['sub']))
{
    $id=$_GET['id'];
$name = $_POST['name'];
$pos = $_POST['pos'];
$img = $_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
$sql = "UPDATE `tbl_chef` SET `name`='$name',`pos`='$pos',`img`='$img' WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
    header("location:viewchef.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>