<?php
include("config.php");

$id=$_GET['id'];

$sql = "UPDATE `tbl_book` SET `status`='1' WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
    header("location:viewbooking.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}

?>