<?php 
session_start();
$message = $_SESSION['message'];
unset($_SESSION['message']);
?>
<?php include("includes/header.php"); ?>
  <!-- ======= Hero Section ======= -->
  <section id="contct_header" class="d-flex align-items-center">
    <div class="container" data-aos="fade-up">
      <div class="row"></div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" >

        <div class="heading">
          <h1 class="heading_text"><img class="heading_logo" src="img/heading_left_logo.png" alt=""> CONTACT <span class="heading_bold">US </span><img class="heading_logo" src="img/heading_right_logo.png" alt=""></h1>
          <p class=" contactus_para">"Get in touch with us today!"</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
             <img class="cont_img" src="img/contactpagelogo.png" alt="">
            <!-- <div class="info">
              <div class="address">
                <i class="fa fa-map-marker"></i>
                <h4>Location:</h4>
                <p>GBL LABS PRIVATE LIMITED Nakshatra Altitude Towers, Karmanghat,Hyderabad, Telangana, India</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <p>support@metarix.network</p>
              </div>

              <div class="phone">
                <i class="fa fa-phone"></i>
                <h4>Call:</h4>
                <p>(1) 805 439 1288</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15233.847672240532!2d78.52739861917146!3d17.34149214213274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb98834e519e89%3A0xa310cd2c89a4d912!2sKharmanghat%2C%20Telangana!5e0!3m2!1sen!2sin!4v1640602217294!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"></iframe>
              
            </div> -->

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="form/contact.php" method="post" role="form" class="php-email-form">
			    <?php if(isset($message)){ ?>
				<div class="alert alert-success" role="alert">
					<?php echo $message; ?>
				</div>
			  <?php } ?>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

        <div class="row">

        <div class="info">
              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <a href="support@metarix.network">support@metarix.network</a>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Partner Email:</h4>
                <a href="partner@metarix.network">partner@metarix.network</a>
              </div>

        </div>


             


        </div>

      </div>
    </section><!-- End Contact Section -->

<?php include("includes/footer.php"); ?>