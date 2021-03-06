<?php
// Start the session
session_start();
if (!(isset($_SESSION["login"]))){
    $_SESSION["login"] = "no";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Vault - About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 " role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><img src="images/logo.png" alt="Image" class="img-fluid rounded"></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <?php 
                  if ($_SESSION["login"] === "yes"){ //if you are logged in - show member home page
                    ?>
                    <li><a href="memberhome.php">Member Home</a></li>
                    <li><a href="buy.php">Subscribe</a></li>
                <?php
                  }
                ?>
                  <!-- <ul class="dropdown">
                    <li><a href="#">The Company</a></li>
                    <li><a href="#">The Leadership</a></li>
                    <li><a href="#">Philosophy</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul> -->
                <!-- <li><a href="blog.html">Blog</a></li> -->
                
                <li class="mr-5"><a href="contact.php">Contact Us</a></li>
                <?php 
                  if ($_SESSION["login"] === "yes"){ //if you are logged in - show logout page 
                    ?>
                    <li class="ml-xl-3 login"><a href="login.php"><span class="border-left pl-xl-4"></span></a></li>
                    <li><a href="logout.php" class="cta"><span class="bg-primary text-white rounded ">Logout</span></a></li>
                <?php
                  }
                ?>
                  <?php 
                  if ($_SESSION["login"] != "yes"){ // if not logged in show the login and register pages
                    ?>
                    <li class="ml-xl-3 login"><a href="login.php"><span class="border-left pl-xl-4"></span>Log In</a></li>
                    <li><a href="register.php" class="cta"><span class="bg-primary text-white rounded">Register</span></a></li>
                <?php
                  }
                ?>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>

  
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/dark-background.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>About Us</h1>
                <p class="mb-0">Why we're not your typical gaming product</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    <div class="site-section">
      <div class="container">
          <?php
           
          ?>
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="images/gamelogos.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Why The Vault</h2>
            <p>We do gaming differently. We dont nickel and dime, instead, we charge a flat rate for a single, solid product.</p>
            <p class="mb-4">No hidden fees or prices. Enjoy access to a wide and diverse collection of games from top developers. Discover new games
              or play your favorites, all for one low subscription price.</p>

            <ul class="ul-check list-unstyled primary">
              <li>No hidden or additional fees</li>
              <li>Unlimited access to games</li>
              <li>No ads or limitations to your games</li>
            </ul>
              <p><a href="register.html" class="">Sign Up for a Free Trial</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section"  data-aos="fade">
      <div class="container">
        
        
        <div class="row  mb-5">
          <div class="col-12">
            <img src="images/gamer.jpg" alt="Image" class="img-fluid mb-5">
          </div>
        </div>
        <div class="row mb-5">

          <div class="col-md-4 ml-auto">
            <p>We offer a single subscription to our gaming library, which grants you access to every game with unlimited playing time. Instead of selling a single game,
              you are able to purchase access to thousands of games for the cost of a fraction of a game per month.</p>
            <p><a href="listings.html" class="">See Games</a></p>
          </div>
          <div class="col-md-4">
            <p>From your favorite Triple-A titles to indie gems, discover our wide selection of games available in our package. Choose to subscribe to either a monthly plan,
              or save by purchasing our annual gaming pass.</p>
            <p><a href="register.html" class="">Sign Up</a></p>
          </div>
        </div>

        <div class="row mb-5 mt-5">
          <div class="col-md-4 text-left border-primary">
            <h2 class="font-weight-light text-primary pb-3">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Liem Budzien</h3>
            <p class="caption mb-3 text-primary">Founder</p>
            <p>A second year CS major at UVA, Liem has been with The Vault since September, 2019.</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Anna Karoll</h3>
            <p class="caption mb-3 text-primary">Founder</p>
            <p>Anna Karoll has been with the project since 2019, working to expand the current selection of games.</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Hattan Khalil</h3>
            <p class="caption mb-3 text-primary">Founder</p>
            <p>A computer science student at UVA, Hattan works at The Vault building the online gaming system.</p>
          </div>
        </div>

      </div>
    </div>
  

    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;The Vault has been a great way for me to save money. Instead of buying all of my Triple-A games, I use The Vault to play all of my
                    favorite games for a fraction of the cost. I can't imagine going back to paying for individual games!&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Sometimes it's hard to discover indie games from smaller developers. The Vault has made it easy for me to find games that I enjoy
                    with their curated collection of high quality games. The days of browsing Steam for hours are gone.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;As a casual gamer, The Vault has made it accessible to play a wide variety of games. Instead of paying for games I rarely play,
                    the low monthly cost makes it possible to try out a variety of games to find my favorites.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;If you're a parent, this is the perfect gift for your kids. Without ads or hidden fees, I can let my kids play their games with
                    peace of mind that they are getting a high quality experience without getting trapped into expensive habits!&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
   

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About</h2>
                <p>We are a subscription service revolutionizing the gaming industry. Say goodbye to spending $60 on a single game, and enjoy 
                  full access to our entire library for a low price.</p>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Navigations</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Games</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>