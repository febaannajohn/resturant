<?php
include("header.php");
?>


<section class="ftco-section contact-section">
<div class="container mt-5">
<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">LOGIN</h2>
          </div>
        </div>
  <div class="row block-9">
              <div class="col-md-4 contact-info ftco-animate">
                  <div class="row">
                      <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Website:</span> <a href="#">yoursite.com</a></p>
          </div>
                  </div>
              </div>
              <div class="col-md-1"></div>
    <div class="col-md-6 ftco-animate">
      <form action="loginaction.php" method="POST" class="contact-form">
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Your Email">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <input name="pass" type="password" class="form-control" placeholder="Password">
              </div>
              </div>
        </div>
        
        
       
        <div class="form-group">
          <input type="submit" value="LOGIN" name="register" class="btn btn-primary py-3 px-5">
        </div></div>
      </form>
    </div>
  </div>
</div>
</section>



<?php
include("footer.php");
?>