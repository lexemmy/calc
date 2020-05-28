<?php  include_once('lib/header.php');
        include 'functions/alert.php';
        session_start();
?>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Login</li>
        </ol>
      
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
     <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Login</h2>
          
        </div>

        

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-6 col-lg-6 mt-3">
           

            <form action="process/plogin.php" id="login_form" method="post" role="form" class="php-email-form">
              <div class="form-row justify-content-center">
                 <p><?php  print_alert(); ?></p>
                <div class="col-md-9 form-group">
                  <input type="text" name="email" class="form-control" id="form_email" placeholder="Your Email" data-rule="email" />
                  <div class="validate" id="email_error_message"></div>
                </div>
                
              </div>
             <div class="form-row justify-content-center">
                
                <div class="col-md-9 form-group">
                  <input type="password" class="form-control" name="password" id="form_password" placeholder="Your password" />
                  <div class="validate" id="password_error_message"></div>
                </div>
              </div>
             
              
              <div class="text-center"><button type="submit">Login</button></div>
              <p align="center">Don't have an account? <a href="register.php">Register</a></p>
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