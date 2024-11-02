<?php
include("admin/config.php");

$c_id=$_GET['c_id'];
$quantity=$_POST['quantity'];
$price=$_POST['quantity']*$_POST['price'];
echo $price;
$sql = "UPDATE `tbl_cart` SET `quantity`='$quantity',`price`='$price' WHERE `c_id`='$c_id'";
if(mysqli_query($conn,$sql)){
    header("location:cart.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}

?>