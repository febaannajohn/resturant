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
        <div class="row no-gutters">



        <?php
      include("admin/config.php");
          $ret=mysqli_query($conn,"select * from tbl_gallery");
        
          while ($row=mysqli_fetch_array($ret)) {

          ?>
					<div class="col-md-3 ftco-animate">
						<img class="gallery img d-flex align-items-center" src="admin/images/<?php  echo $row['g_img'];?>">
							<!-- <div class="icon mb-4 d-flex align-items-center justify-content-center"> -->
    						<!-- <span class="icon-search"></span> -->
    					<!-- </div> -->
						</img>
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