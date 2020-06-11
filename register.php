<?php  include_once('lib/header.php');
        include 'functions/alert.php';
        session_start();
?><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Register</li>
        </ol>
      
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
     <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Register</h2>
          
        </div>
            
        

        <div class="row justify-content-center" data-aos="fade-left" data-aos-delay="300">
          <div class="col-xl-7 col-lg-9 mt-4">
            <form action="process/pregister.php" id=registration_form method="POST" role="form" class="php-email-form">
              <div class="form-row justify-content-center">
                 <p><?php  print_alert(); ?></p>
                <div class="col-md-9 form-group">
                  <input type="text" name="fullname" class="form-control" id="form_username" placeholder="Full Name"/>
                  <div class="validate" id="username_error_message"></div>
                </div>
                
              </div>
               <div class="form-row justify-content-center">
                <div class="col-md-9 form-group">
                  <input type="text" name="email" class="form-control" id="form_email" placeholder="Email"/>
                  <div class="validate" id="email_error_message"></div>
                </div>
                </div>
               <div class="form-row justify-content-center">
                <div class="col-md-9 form-group">
                  <select class="form-control" name="role">
                  	<option value="">select role</option>
                  	<option>End User</option>
                  	<option>Reseller</option>
                  </select>
                  
                </div>
                
              </div>
               <div class="form-row justify-content-center">
                <div class="col-md-9 form-group">
                  <input type="number" name="phone_number" class="form-control" id="form_number" placeholder="Phone Number"/>
                  <div class="validate" id="number_error_message"></div>
                </div>
                
              </div>
              <div class="form-row justify-content-center">
                <div class="col-md-9 form-group">
                  <input type="password" name="password" class="form-control" id="form_password" placeholder="Password"/>
                  <div class="validate" id="password_error_message"></div>
                </div>
               
              </div>
               <div class="form-row justify-content-center">
                <div class="col-md-9 form-group">
                  <input type="password" name="Confirmpassword" class="form-control" id="form_retype_password" placeholder="Confirm Password"/>
                  <div class="validate" id="retype_password_error_message"></div>
                </div>
                
              </div>
             
              
              
              <div class="text-center"><button type="submit">Register</button></div>
              <p align="center" class="pt-3">Already have an account? <a href="login.php">Login</a></p>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Blog Section -->

  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <?php  include_once('lib/footer.php');
?>
   