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
    <title>The Vault - Minecraft</title>
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
               
                <?php 
                  if ($_SESSION["login"] === "yes"){ //if you are logged in - show logout page 
                    ?>
                     <li><a href="buy.php">Subscribe</a></li>
                <li class="mr-5"><a href="contact.php">Contact Us</a></li>
                    <li class="ml-xl-3 login"><a href="login.php"><span class="border-left pl-xl-4"></span></a></li>
                    <li><a href="logout.php" class="cta"><span class="bg-primary text-white rounded ">Logout</span></a></li>
                <?php
                  }
                ?>
                  <?php 
                  if ($_SESSION["login"] != "yes"){ // if not logged in show the login and register pages
                    ?>
                    
                <li class="mr-5"><a href="contact.php">Contact Us</a></li>
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
                <h1>What is the game?</h1>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            
            <div class="mb-4" style="margin-top: -150px;">
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="images/minecraft-cover.png" alt="Image" class="img-responsive" height="600" width="281"></div>
                <div><img src="images/minecraft-menu.png" alt="Image" class="img-fluid rounded"></div>
                <div><img src="images/minecraft-vill.png" alt="Image" class="img-fluid rounded"></div>
                <div><img src="images/minecraft-play-2.png" alt="Image" class="img-fluid rounded"></div>
              </div>
            </div>
            
            <h4 class="h5 mb-4 text-black">Description</h4>
            <p>IT’S A GAME ABOUT PLACING BLOCKS AND GOING ON ADVENTURES</p>

            <p>It’s set in infinitely-generated worlds of wide open terrain - icy mountains, swampy bayous, vast pastures and much more - filled with secrets, wonders and peril!?</p>
            <p>The game allows players to build with a variety of different blocks in a 3D procedurally generated world, requiring creativity from players.
               Other activities in the game include exploration, resource gathering, crafting, and combat.
                Multiple game modes that change gameplay are available, including—but not limited to—a survival mode, in which players must acquire
                 resources to build the world and maintain health, and a creative mode, 
              where players have unlimited resources to build with.</p>
            

            <p class="mt-3"><a href="login.html" class="btn btn-primary">Play Now</a></p>

          </div>
          <div class="col-lg-3 ml-auto">

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Filters</h3>
              <form action="#" method="post">
                <div class="form-group">
                  <input type="text" placeholder="Search for type of game" class="form-control">
                </div>
                <div class="col-xs-12 form-group">
                    <div class="select-wrap">
                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                        <select class="form-control" name="" id="">
                          <option value="">Action &amp; Adventure</option>
                          <option value="" selected="">All Categories</option>
                          <option value="">Indie</option>
                          <option value="">Single Player</option>
                          <option value="">Multiplayer</option>
                          <option value="">Cars &amp; Racing</option>
                          <option value="">Others</option>
                        </select>
                      </div>
                    </div>
                  <!-- <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                        <option value="">All Categories</option>
                        <option value="" selected="">Real Estate</option>
                        <option value="">Books &amp;  Magazines</option>
                        <option value="">Furniture</option>
                        <option value="">Electronics</option>
                        <option value="">Cars &amp; Vehicles</option>
                        <option value="">Others</option>
                      </select> 
                      </div>
                  </div>
                    -->
                      <!-- <div class="dropdown">
                          <button type="button" class="btn btn-secondary dropdown-toggle " data-toggle="dropdown">
                            Action & Adventure
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">All Categories</a>
                            <a class="dropdown-item" href="#">Indie</a>
                            <a class="dropdown-item" href="#">Single Player</a>
                            <a class="dropdown-item" href="#">Cars &amp; Racing</a>
                            <a class="dropdown-item" href="#">Others</a>
                          </div>
                        </div>  -->
                      <!-- <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                        <option value="">All Categories</option>
                        <option value="" selected="">Action &amp;  Adventure</option>
                        <option value="">Indie</option>
                        <option value="">Single Player</option>
                        <option value="">Cars &amp; Racing</option>
                        <option value="">Others</option>
                      </select>
                    </div>-->
                <!-- <div class="form-group"> -->
                  <!-- select-wrap, .wrap-icon -->
                  <!-- <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" placeholder="Location" class="form-control"> -->
                  <!-- </div>
                </div> -->
              </form>
            </div>
            
            <!-- <div class="mb-5">
              <form action="#" method="post">
                <div class="form-group">
                  <p>Radius around selected destination</p>
                </div>
                <div class="form-group">
                  <input type="range" min="0" max="100" value="20" data-rangeslider>
                </div>
              </form>
            </div> -->

            <div class="mb-5">
              <form action="#" method="post">
                <div class="form-group">
                  <p>Category 'All Categories' is selected</p>
                  <p>More filters</p>
                </div>
                <div class="form-group">
                  <ul class="list-unstyled">
                    <li>
                      <label for="option1">
                        <input type="checkbox" id="option1">
                        Cooking
                      </label>
                    </li>
                    <li>
                      <label for="option2">
                        <input type="checkbox" id="option2">
                        Fanasty
                      </label>
                    </li>
                    <li>
                      <label for="option3">
                        <input type="checkbox" id="option3">
                        Military
                      </label>
                    </li>
                    <li>
                      <label for="option4">
                        <input type="checkbox" id="option4">
                        Business/Tycoon 
                      </label>
                    </li>
                  </ul>
                </div>
              </form>
            </div>

           <!--  <div class="mb-5">
              <h3 class="h6 mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>
            </div> -->

          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Trending Today</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">

              <div class="d-block d-md-flex listing">

                  <a href="#.html" class="img d-block" style="background-image: url('images/fortnite-t.png')"></a>
                  <div class="lh-content">
                    <span class="category">Multiplayer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="Games/#.html">Fortnite</a></h3>
                    <p class="mb-0">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-secondary"></span>
                      <span class="review">(90,656 Reviews)</span>
                    </p>
                  </div>
                </div>
                <div class="d-block d-md-flex listing">
                    <a href="minecraft.html" class="img d-block" style="background-image: url('images/minecraft-cover-t.png')"></a>
                    <div class="lh-content">
                      <span class="category">Action &amp; Adventure</span><span class="category">Single Player</span><span class="category">Fantasy</span>
                      <span class="category">Sandbox</span> <span class="category">Multiplayer</span>
                      <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                      <h3><a href="Games/minecraft.html">Minecraft</a></h3>
                      <p class="mb-0">
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="review">(100,506 Reviews)</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-block d-md-flex listing">
                      <a href="#.html" class="img d-block" style="background-image: url('images/gta5-cover-t.png')"></a>
                      <div class="lh-content">
                        <span class="category">Multiplayer</span><span class="category">Shooter</span>
                        <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                        <h3><a href="Games/#.html">GTA 5</a></h3>
                        <p class="mb-0">
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-secondary"></span>
                          <span class="review">(70,457 Reviews)</span>
                        </p>
                      </div>
                    </div>

          </div>
          <div class="col-lg-6">
              <div class="d-block d-md-flex listing">
                  <a href="#.html" class="img d-block" style="background-image: url('images/overcooked-2.png')"></a>
                  <div class="lh-content">
                    <span class="category">Cooking</span><span class="category">Party Game</span><span class="category">MultiPlayer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="Games/#.html">Overcooked 2</a></h3>
                    <p class="mb-0">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="review">(62,429 Reviews)</span>
                    </p>
                  </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="#.html" class="img d-block" style="background-image: url('images/hotline.png')"></a>
                <div class="lh-content">
                  <span class="category">Indie</span><span class="category">Shooter</span><span class="category">Single Player</span>
                  <span class="category">fast-paced</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="Games/#.html">Hotline Miami</a></h3>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-Warning"></span>
                    <span class="review">(54,732 Reviews)</span>
                  </p>
                </div>
          </div>
          <div class="d-block d-md-flex listing">
              <a href="#.html" class="img d-block" style="background-image: url('images/start.png')"></a>
              <div class="lh-content">
                <span class="category">Indie</span><span class="category">Farming</span><span class="category">Single Player</span>
                <span class="category">Simulator</span><span class="category">Romance</span><span class="category">RPG</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="Games/#.html">Stardew Valley</a></h3>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-Warning"></span>
                  <span class="review">(74,232 Reviews)</span>
                </p>
              </div>
            
        </div>

          </div>
        </div>
      </div>
    </div>
    
<!--     <div class="site-section bg-white">
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
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
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
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div> -->


    <div class="newsletter bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2>Newsletter</h2>
            <p>Sign up for newsletter to get updates about whats getting added!</p>
          </div>
          <div class="col-md-6">
            
            <form class="d-flex">
              <input type="text" class="form-control" placeholder="Email">
              <input type="submit" value="Subscribe" class="btn btn-white"> 
            </form>
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