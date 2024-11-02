<?php
include("admin/config.php");
if(isset($_POST['register']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobno = $_POST['mobno'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `tbl_userregister`(`name`,`email`,`address`,`mobno`,`pass`) VALUES ('$name','$email','$address','$mobno','$pass')";
if(mysqli_query($conn,$sql)){
    header("location:userlogin.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>