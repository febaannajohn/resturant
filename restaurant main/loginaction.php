<?php
session_start();
include('admin/config.php');
$email=$_POST['email'];
$pass=$_POST['pass'];
if($email && $pass !=""){
    $sql1="SELECT * FROM `tbl_userregister` WHERE `email`='$email' AND `pass`='$pass'";
    $res1=mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($res1);
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $count1=mysqli_num_rows($res1);

    if($count1 > 0){
        header("location:index.php");
    }else if($email && $pass !=""){ 
        $sql="SELECT * FROM `tbl_admin` WHERE `email`='$email' AND `pass`='$pass'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count > 0)
        {
            $_SESSION['Admin'] = "Admin";
            header("location:admin/index.php");
        
        }else{
    echo 'incorrect';
   
}}else{
    header("location:login.php");
}}

?>