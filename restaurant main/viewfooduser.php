<?php
include("header.php");
?>


    <section class="ftco-menu mb-5 pb-5" >
    	<div class="container">
    		<div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
    		<div class="row d-md-flex" id="food">
	    		<!-- <div class="col-lg-12 ftco-animate p-md-5"> -->
		    		<div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <form action="#food" method="POST">
                                    <a class="nav-link"><input style="border: none;background-color: transparent;color: white;" value="ALL" type="submit" name="All"></a>
                                </form>
                                <form action="#food" method="POST">
                                    <a class="nav-link"><input style="border: none;background-color: transparent;color: white;" value="Starters" type="submit" name="starters"></a>
                                </form>
                                <form action="#food" method="POST">
                                    <a class="nav-link"><input style="border: none;background-color: transparent;color: white;" value="Breakfast" type="submit" name="Breakfast"></a>
                                </form>
                                <form action="#food" method="POST">
                                    <a class="nav-link"><input style="border: none;background-color: transparent;color: white;" value="Dinner" type="submit" name="Dinner"></a>
                                </form>
                                <form action="#food" method="POST">
                                    <a class="nav-link"><input style="border: none;background-color: transparent;color: white;" value="Apitizer" type="submit" name="Apitizer"></a>
                                </form>
                            </div>
		                </div>
                    </div> 
                <!-- </div>    -->
		            <div class="col-md-12 align-items-center" >
		              	<div class="row">
                          <?php
                            include("admin/config.php");
                            $ret=mysqli_query($conn,"SELECT * FROM `tbl_food`");
                            if(isset($_POST['starters'])){
                            $ret=mysqli_query($conn,"SELECT * FROM `tbl_food` WHERE `type`='starters'");
                            }
                            elseif(isset($_POST['Breakfast'])){
                                $ret=mysqli_query($conn,"SELECT * FROM `tbl_food` WHERE `type`='Breakfast'");
                            }
                            elseif(isset($_POST['Dinner'])){
                                $ret=mysqli_query($conn,"SELECT * FROM `tbl_food` WHERE `type`='Dinner'");
                            }
                            elseif(isset($_POST['Apitizer'])){
                                $ret=mysqli_query($conn,"SELECT * FROM `tbl_food` WHERE `type`='Apitizer'");
                            }
                            while ($row=mysqli_fetch_array($ret)) {
                            ?>
                            <div class="col-md-3" >
                                <div class="menu-entry">
                                    <a href="#" class="img" style="background-image: url(admin/images/<?php  echo $row['img'];?>);"></a>
                                    <img src="img-fluid" src="admin/images/<?php  echo $row['img'];?>" alt="">
                                    <div class="text text-center pt-4">
                                        <h3><a href="#"><?php  echo $row['name'];?></</a></h3>
                                        <p><?php  echo $row['descr'];?></p>
                                        <p class="price"><span><?php  echo $row['price'];?></span></p>
                                        <p >
                                        <?php
                                        if(isset($_SESSION['id'])){
                                        echo "<a class='btn btn-primary btn-outline-primary' href='cartaction.php?id=".$row['id']."'>Add to Cart</a>";
                                        }
                                        else{
                                        echo "<a class='btn btn-primary btn-outline-primary' href='userlogin.php'>Add to Cart</a>";
                                        }                    
                                        ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
		              	</div>
                    </div> 
		              

		            <!-- </div>
		          </div>
		        </div>
		      </div> -->
		    </div>
    	</div>
    </section>



<?php
include("footer.php");
?>