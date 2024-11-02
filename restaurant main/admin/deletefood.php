<?php
include('config.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_food` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewfood.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>