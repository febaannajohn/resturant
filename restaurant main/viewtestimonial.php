<?php
include("header.php");
?>



    <section class="ftco-section ftco-services">
    	<div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">


        <?php
              include("admin/config.php");
                  $ret=mysqli_query($conn,"select * from tbl_review");
                  while ($row=mysqli_fetch_array($ret)) {
                  ?>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              <img src="admin/images/<?php  echo $row['img'];?>" class="img-fluid" alt="">
              </div>
              <div class="media-body">
                <h3 class="heading"><?php  echo $row['name'];?></h3>
                <p><b><?php  echo $row['pos'];?></b></p>
                <p><?php  echo $row['descr'];?></p>
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