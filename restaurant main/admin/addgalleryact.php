<?php
include("config.php");
if(isset($_POST['sub'])){

    $g_img = $_FILES['g_img']['name'];
    move_uploaded_file($_FILES['g_img']['tmp_name'],"images/".$g_img);
    $sql = "INSERT INTO `tbl_gallery`(`g_img`) VALUES ('$g_img')";
    if(mysqli_query($conn, $sql)) {
        header("location:viewgallery.php");
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
}
?>