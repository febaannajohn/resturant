<?php
include("header.php");
$u_id=$_SESSION['id'];
?>


<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Remove</th>
						        <th>Image</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
                            <?php
                        include("admin/config.php");
                            $ret=mysqli_query($conn,"select * from tbl_cart where u_id=$u_id");
                            while ($row=mysqli_fetch_array($ret)) {
                                $f_id=$row['f_id'];  
                                
                            $ret1=mysqli_query($conn,"select * from tbl_food where id=$f_id");
                            while ($row1=mysqli_fetch_array($ret1)) {


                            ?>


						      <tr class="text-center">
						        <td class="product-remove">
                                    <?php
                                    echo "<a href='cartdelete.php?c_id=".$row['c_id']."'><span class='icon-close'></span></a>";
                                    ?>
                                    <!-- <a href="#"><span class="icon-close"></span></a> -->
                                </td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(admin/images/<?php  echo $row1['img'];?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php  echo $row1['name'];?></h3>
						        	<p><?php  echo $row1['descr'];?></p>
						        </td>
						        
						        <td class="price"><?php  echo $row1['price'];?></td>
						        
						        <td class="quantity">
									<?php
									echo "<form action='updatecart.php?c_id=".$row['c_id']."' method='POST'>";
									?>
						        	<div class="input-group mb-3">
					             	<input type="number" name="quantity" class="quantity form-control input-number" value="<?php  echo $row['quantity'];?>" min="1" max="100">
									 <input type="submit" value="UPDATE">
								</div>
								  
					          </td>
						        
						        <td class="total">
								<?php  echo $row['quantity']*$row1['price'];?>
								<input type="number" name="price" class="quantity form-control input-number" value="<?php  echo $row1['price'];?>" hidden>
								
									</form>
								</td>
						      </tr><!-- END TR-->

                              <?php
                                }
                            }
                                ?>
 
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<!-- <p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p> -->
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>
								<?php
								$sql = "SELECT SUM(price) AS total FROM `tbl_cart` WHERE u_id=$u_id";
								$result = mysqli_query($conn, $sql);
								
								if ($result) {
									$row = mysqli_fetch_assoc($result);
									$sum = $row['total'];
									echo  $sum;
								} else {
									echo "Error: " . mysqli_error($conn);
								}
								?>
							</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

    




<?php
include("footer.php");
?>