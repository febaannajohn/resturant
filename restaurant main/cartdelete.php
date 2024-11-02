<?php
include('admin/config.php');
$c_id=$_GET['c_id'];
$sql="DELETE FROM `tbl_cart` WHERE `c_id`='$c_id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:cart.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>