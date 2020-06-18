<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0027) -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiggyVest</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <header class="header" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav>
            <div class="site-navbar">
              <img src="image/piggy.png" alt="" class="logo">
              <input type="checkbox" name="" id="chk">
              <label for="chk" class="show-menu-btn">
                <i class="fa fa-navicon"></i>
              </label>
              <ul class="menu" style="list-style-type: none;">
                <li><a href="#" class="navbar-link">About</a></li>
                <li><a href="#" class="navbar-link">Stories</a></li>
                <li><a href="#" class="navbar-link">FAQ</a></li>
                <li><a href="#" class="navbar-link">Blog</a></li>
                <li><a href="#" class="navbar-link">Login</a></li>
                <li><a href="#" class="navbar-link">Create Account</a></li>
                <label for="chk" class="hide-menu-btn">
                  <i class="fa fa-times"></i>
                </label>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="image/img.png" width="100%">
        </div>
        <div class="col-md-6">
          <div class="form-container">
            <form>
              <div class="col-md-10">
                <h4>Interest Calculator</h4>

              </div>

              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-field">
                    <label for="amount">How much do you want to save?</label>
                    <input style="color:black" type="number" value='<? if(isset($_SESSION['amounto'])) echo $_SESSION['amounto']; else ''; ?>' name="amounto" id="" required="">
                    <p class='error amount-error'></p>
                  </div>
                </div>
              </div>
              <div class="form-row">

                <!-- <div class="col-md-"></div> -->
                <div class="col-md-6">
                  <div class="form-field">
                    <label for="amount"> Select Package</label>
                    <select name="rate" id="">
                      <option value="0.1">Flex Naira (10% per annum)</option>
                      <option value="0.1">Piggybank (10% per annum)</option>

                      <option value="0.15">Safe Lock (15% per annum)</option>
                      <option value="0.1">Targets (10% per annum)</option>
                      <option value="0.06">Flex Dollar (6% per annum)</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-field">

                    <div class="form-field">
                      <label for="amount">Numbers of Months?</label>
                      <input style="color:black" value='<? if(isset($_SESSION['daysnum'])) echo $_SESSION['daysnum']; else ''; ?>' type="number" name="daysnum" id="days" required="">
                      <p class='error months-error'></p>

                    </div>


                    <div class="form-field">

                      <input class="output" style="color:#fff" type="button" name="btn" value="Calculate RIO"
                        onclick="calc(this.form)">

                      <p class="pt-3">Return on Investment</p>
                      <h3 class="output" id="exp">0.00</h3>


                    </div>
                  </div>
                </div>

              </div>
              <div class="form-row">
                  <div>
                      <a href="download.php">Download <img src="https://img.icons8.com/color/20/000000/download.png"/></a></div>
                  <div>&nbsp&nbsp
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br>    
                  </div>&nbsp&nbsp&nbsp
                  <div>
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8080%2Finterestcalc%2Findex.php&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
                  
              </div>
            </form>
          </div>
        </div>


      </div>

    </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <div class="form-row">
            <h4 class="pt-3">Daily Saving Target calculator</h4>
            <div class="form-field">
              <form>
                <label for="amount">What's your target amount?</label>
                <input style="color:black" type="number" name="target" required="">
                <p class='error daily-target-error'></p>
  
                <label for="amount" class="pt-3">In how many days?</label>
                <input style="color:black" type="number" name="day" required="">
                <p class='error daily-error'></p>
  
                <label for="amount" class="pt-3"></label>
  
                <input class="output pt-3" style="color:#fff" type="button" name="btn" value="Calculate Target"
                  onclick="calcDay(this.form)">
              </form>
             
            </div>
          <span class="output" id="tag">O.O</span> 
          </div>


        </div>
        <div class="col-md-6"><img src="image/money.png" width="100%"></div>
      </div>
      <div class="form-row">
                  <div>
                      <a href="download.php">Download <img src="https://img.icons8.com/color/20/000000/download.png"/></a></div>
                  <div>&nbsp&nbsp
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br>    
                  </div>&nbsp&nbsp&nbsp
                  <div>
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8080%2Finterestcalc%2Findex.php&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
                  
              </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src="image/img2.png" width="100%">


        </div>
        <div class="col-md-4">
          <div class="form-row pb-4">
            <h4>Monthly Saving Target calculator</h4>
            <div class="form-field">
              <form>
                <label for="amount">What's your target amount?</label>
                <input style="color:black" type="number" name="target" id='target' required="">
                <p class='error monthly-target-error'></p>
  
                <label for="amount" class="pt-3">In how many Months?</label>
                <input style="color:black" type="number" name="month" required="">
                 <p class='error monthly-error'></p>
  
                <label for="amount" class="pt-3"></label>
  
                <input class="output pt-3" style="color:#fff" type="button" name="btn" value="Calculate Target"
                  onclick="calcMonth(this.form)">
              </form>
              
            </div>
            <span class="output" id="tag2">O.O</span>
          </div>
          <div class="form-row">
                  <div>
                      <a href="download.php">Download <img src="https://img.icons8.com/color/20/000000/download.png"/></a></div>
                  <div>&nbsp&nbsp
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br>    
                  </div>&nbsp&nbsp&nbsp
                  <div>
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8080%2Finterestcalc%2Findex.php&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
                  
              </div>
        </div>

      </div>

    </div>

  </section>
 <script type="text/javascript">


    function calc(f) {
      let isValid = f.checkValidity();
      var p, r, t, si;
      p = parseInt(f.amounto.value);
      r = parseFloat(f.rate.value);
      t = parseInt(f.daysnum.value); //number of days
      if (isValid) {
        let errors = f.querySelectorAll('.error');
        for (var i = 0; i < errors.length; i++) {
          errors[i].textContent = '';
        }
        si = (p * r * t) / 12;
        document.getElementById("exp").innerHTML = "&#8358;" + Math.round((si + p).toFixed(2));
      }
      else {
        if (p != NaN) {
          f.querySelector('.amount-error').textContent = 'Please enter a valid amount'
        }
        if (t != NaN) {
          f.querySelector('.months-error').textContent = 'Please enter a valid Month'
        }
      }

    }

    function calcDay(x) {
      let isValid = x.checkValidity();
      var t, m;
      t = parseInt(x.target.value);
      m = parseInt(x.day.value);
      if (isValid) {
        let errors = x.querySelectorAll('.error');
        for (var i = 0; i < errors.length; i++) {
          errors[i].textContent = '';
        }
        d = t / m;
        document.getElementById("tag").innerHTML = "&#8358;" + d;
      }
      else {
        if (t != NaN) {
          x.querySelector('.daily-target-error').textContent = 'Please enter a valid amount'
        }
        if (m != NaN) {
          x.querySelector('.daily-error').textContent = 'Please enter a valid Day'
        }
      }

      document.getElementById("tag").innerHTML = "you will have to save &#8358;" + d + " everyday to meet your target";
    }

    function calcMonth(y) {
      let isValid = y.checkValidity();
      var t, m;
      t = parseInt(y.target.value);
      m = parseInt(y.month.value);
      if (isValid) {
        let errors = y.querySelectorAll('.error');
        for (var i = 0; i < errors.length; i++) {
          errors[i].textContent = '';
        }
        d = t / m;
        document.getElementById("tag2").innerHTML = "&#8358;" + d;
      }
      else {
        if (t != NaN) {
          y.querySelector('.monthly-target-error').textContent = 'Please enter a valid amount'
        }
        if (m != NaN) {
          y.querySelector('.monthly-error').textContent = 'Please enter a valid month'
        }
      }

      document.getElementById("tag2").innerHTML = "you will have to save &#8358;" + d + " every month to meet your target";
    }


  </script>




  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>




</body>
<footer>

</footer>

</html>