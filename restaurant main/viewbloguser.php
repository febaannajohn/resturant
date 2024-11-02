<?php
include("header.php");
?>



    <section class="ftco-section">
      <div class="container">
      <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">

        <?php
                include("admin/config.php");
                    $ret=mysqli_query($conn,"select * from tbl_blog");
                  
                    while ($row=mysqli_fetch_array($ret)) {

                    ?>



          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('admin/images/<?php  echo $row['img'];?>');">
              </a>
              <div class="text py-4 d-block">
              	<!-- <div class="meta">
                  <div><a href="#">Sept 28, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div> -->
                <h3 class="heading mt-2"><a href="#"><?php  echo $row['name'];?></a></h3>
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