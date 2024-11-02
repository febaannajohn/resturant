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
						        
						        <th>Name</th>
						        <th>Email</th>
						        <th>Address</th>
						        <th>Mobile</th>
						        <th>Price</th>
								<th>Status</th>
								<th>Cancel</th>
						      </tr>
						    </thead>
						    <tbody>
                            <?php
                        include("admin/config.php");
                            $ret1=mysqli_query($conn,"select * from tbl_book where uid=$uid");
                            while ($row1=mysqli_fetch_array($ret1)) {
                            ?>
						      <tr class="text-center">
						        <td class="product-name">
						        	<h3><?php  echo $row1['name'];?></h3>
						        </td>
								<td class="product-name">
						        	<h3><?php  echo $row1['email'];?></h3>
						        </td>
						        <td class="product-name">
						        	<h3><?php  echo $row1['address'];?></h3>
						        </td>
								<td class="product-name">
						        	<h3><?php  echo $row1['mob'];?></h3>
						        </td>
								<td class="product-name">
						        	<h3><?php  echo $row1['price'];?></h3>
						        </td>
								<td class="product-name">
						        	<h3>
									<?php
									if($row1['status']==1)
									{
									echo "Approved";
									}
									else
									{
										echo "Not Approved"; 
									}
									?>
									</h3>
						        </td>
								<td class="product-remove">
                                    <?php
                                    echo "<a href='deletebooking.php?id=".$row1['id']."'><span class='icon-close'></span></a>";
                                    ?>
                                </td>
						      </tr><!-- END TR-->
                              <?php
                                }
                                ?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		
			</div>
		</section>

    




<?php
include("footer.php");
?>