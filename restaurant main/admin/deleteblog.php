<?php
include('config.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_blog` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewblog.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>