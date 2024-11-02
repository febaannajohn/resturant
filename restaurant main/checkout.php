<?php
include("header.php");
?>
    <?php
include('admin/config.php');
$uid=$_SESSION['id'];
$sql="SELECT * FROM `tbl_userregister` WHERE id='$uid'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?> 
<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Checkout</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checout</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 ftco-animate">

						<form action="checkoutaction.php" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        <input type="number" value="<?php  echo $row['id'];?>" name="uid" class="form-control form-control-lg form-control-a" hidden>

							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Name</label>
	                  <!-- <input type="text" class="form-control" placeholder=""> -->
                      <input name="name" value="<?php  echo $row['name'];?>" type="text" class="form-control" disabled>
                      <input name="name" value="<?php  echo $row['name'];?>" type="text" class="form-control" hidden>

	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Email</label>
	                  <input type="text" name="email" value="<?php  echo $row['email'];?>"  class="form-control" disabled>
                      <input type="text" name="email" value="<?php  echo $row['email'];?>"  class="form-control" hidden>

	                </div>
                </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Address</label>
	                    <input type="text" name="address" value="<?php  echo $row['address'];?>"  class="form-control" disabled>
                        <input type="text" name="address" value="<?php  echo $row['address'];?>"  class="form-control" hidden>

	                    </div>
		            </div>
                    <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Mobile</label>
	                    <input type="text" name="mobno" value="<?php  echo $row['mobno'];?>" class="form-control" disabled>
                        <input type="text" name="mobno" value="<?php  echo $row['mobno'];?>" class="form-control" hidden>

	                    </div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Price</label>
                        <?php
$sql = "SELECT SUM(price) AS total FROM `tbl_cart` WHERE u_id=$uid";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $sum = $row['total'];
    echo  "<input type='text' name='price' value='$sum' class='form-control' disabled>";
    echo "<input type='text' name='price' value='$sum' class='form-control' hidden>";

} else {
    echo "Error: " . mysqli_error($conn);
}
?> 

	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Gpay ID</label>

	                  <input type="email" name="gpayid"  class="form-control">
	                </div>
		            </div>
		            
	              <div class="col-md-12">
	                <div class="form-group">
	                  <input type="submit" name="submit" class="btn btn-primary" >
	                </div>
                </div>
                <div class="w-100"></div>
                <?php
// }
?>
	          </form><!-- END -->



	          
	          </div>
          </div> <!-- .col-md-8 -->

          </div>

        </div>
      </div>
    </section> <!-- .section -->

<?php
}
?>

<?php
include("footer.php");
?>
