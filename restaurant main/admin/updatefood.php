<?php
include("config.php");
if(isset($_POST['sub']))
{
    $id=$_GET['id'];
    $name = $_POST['name'];
    $descr = $_POST['descr'];
    $price = $_POST['price'];
    $type = $_POST['type'];
$img = $_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
$sql = "UPDATE `tbl_food` SET `name`='$name',`descr`='$descr',`price`='$price',`img`='$img',`type`='$type' WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
    header("location:viewfood.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>
