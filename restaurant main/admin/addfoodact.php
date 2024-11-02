<?php
include("config.php");
if(isset($_POST['sub'])){
    $f_name = $_POST['f_name'];
    $f_descr = $_POST['f_descr'];
    $f_price = $_POST['f_price'];
    $type=$_POST['type'];
    $f_img = $_FILES['f_img']['name'];
    move_uploaded_file($_FILES['f_img']['tmp_name'],"images/".$f_img);
    $sql = "INSERT INTO `tbl_food`(`name`,`descr`,`price`,`img`,`type`) VALUES ('$f_name','$f_descr','$f_price','$f_img','$type')";
    if(mysqli_query($conn, $sql)) {
        header("location:viewfood.php");
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
}
?>