<?php
include('config.php');
$g_id=$_GET['g_id'];
$sql="DELETE FROM `tbl_gallery` WHERE `g_id`='$g_id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewgallery.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>