<?php
include('config.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_review` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewreview.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>