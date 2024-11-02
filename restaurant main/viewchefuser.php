<?php
include("header.php");
?>


<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Best Coffee Sellers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">


        <?php
        include("admin/config.php");
        $ret=mysqli_query($conn,"select * from tbl_chef");
                                                  
        while ($row=mysqli_fetch_array($ret)) {

        ?>


        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img"  style="background-image: url(admin/images/<?php  echo $row['img'];?>);height:300px;"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#"><?php  echo $row['name'];?></a></h3>
    						<p><?php  echo $row['pos'];?></p>
    						<!-- <p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p> -->
    					</div>
    				</div>
        	</div>
        	

<?php
        }
        ?>



        </div>
    	</div>
    </section>


    <?php
include("footer.php");
?>