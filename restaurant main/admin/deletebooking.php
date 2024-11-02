<?php
include('config.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_book` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewbooking.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>