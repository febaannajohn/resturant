<?php
include("admin/config.php");
if(isset($_POST['submit']))
{
$uid = $_POST['uid'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobno = $_POST['mobno'];
$price = $_POST['price'];
$gpayid = $_POST['gpayid'];


$sql = "INSERT INTO `tbl_book`(`uid`,`name`,`email`,`address`,`mob`,`price`,`gpayid`) VALUES ('$uid','$name','$email','$address','$mobno','$price','$gpayid')";
if(mysqli_query($conn,$sql)){
    header("location:payment.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>