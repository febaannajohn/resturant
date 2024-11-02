<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          
	          <li class="nav-item"><a href="viewfooduser.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="viewtestimonial.php" class="nav-link">Testimonials</a></li>
	          <li class="nav-item"><a href="viewbloguser.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="viewchefuser.php" class="nav-link">Chef</a></li>
              <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
	          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="room.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li> -->
            <?php 
          if(isset($_SESSION['id'])){
          ?>
          <li class="nav-item">
            <a class="nav-link " href="status.php">STATUS</a>
          </li>
          <li class="nav-item">
              <a  class="nav-link" style="color:white;font-weight:bold;" disabled><?php echo($_SESSION['name']);?></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
          <li class="nav-item cart"><a href="cart.php" class="nav-link">
            <span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center">
              <small>
              <?php
            include('admin/config.php');
              $uid=$_SESSION['id'];

							$sql = "SELECT COUNT(*) as count FROM tbl_cart where u_id=$uid";

// Execute the query
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $rowCount = $row['count'];
    echo $rowCount;
} else {
    echo "Error: " . mysqli_error($conn);
}
								?>
              </small></span></a></li>
          <?php }else{ ?>
              <li class="nav-item">
              <a class="nav-link" href="register.php">REGISTER</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="login.php">LOGIN</a>
          </li>
          <?php }?>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->