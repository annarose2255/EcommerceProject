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

    <title>The Vault - Home</title>
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
    <link rel="stylesheet" type="text/css" href="directoryads/css/flaticon.css"> 
    
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
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li> <!--  class="has-children"> -->
                <?php 
                  if ($_SESSION["login"] === "yes"){ //if you are logged in - show member home page
                    ?>
                    <a href="memberhome.php">Member Home</a>
                <?php
                  }
                ?>
              
                  
                  <!-- <ul class="dropdown">
                    <li><a href="#">The Company</a></li>
                    <li><a href="#">The Leadership</a></li>
                    <li><a href="#">Philosophy</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul> -->
                </li>
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <li><a href="buy.php">Subscribe</a></li>
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
                  if ($_SESSION["login"] != "yes"){
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

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/gamer.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
       
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Welcome To The Vault</h1>
                <p data-aos="fade-up" data-aos-delay="100"> </p>
              </div>
            </div>
            
            <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
              <form class="form-inline" method="post">
                <!-- <div class="row align-items-center"> 
                  <div class="col-lg-12 mb-2 mb-xl-0 col-xl-6">-->
                  <!-- <div class="d-flex justify-content-between"> -->
                    <div class="form-group ml-lg-12 mb-2" >
                    <input type="text" class="form-control rounded" placeholder="What are you looking for?" style="width: 700px;">
                  </div>
                 <!--  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                       <div class="wrap-icon">
                      <!-- <span class="icon icon-room"></span> -->
                        <!-- <input type="text" class="form-control rounded"> <!--  placeholder="Location">
                    </div> 
                  </div>
                  -->
                    
                 
                 <!--  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-6"> -->
                    <div class="form-group mx-sm-3 mb-2">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                       <select class="form-control rounded" name="" id="">
                        <option value="">All Categories</option>
                        <option value="">Multiplayer</option>
                        <option value="">Action &amp;  Adventure</option>
                        <option value="">Indie</option>
                        <option value="">Single Player</option>
                        <option value="">Cars &amp; Racing</option>
                        <option value="">Others</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="col-lg-12 col-xl-2 ml-auto text-right"> -->
                    <div class="button">
                    <input type="submit" class="btn btn-primary mb-2 btn-block rounded" value="Search">
                  </div>
                  
                
              </form>
            </div>

            <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
              <div class="col-12">
                <h2 class="d-inline-block">Trending Search:</h2>
                <a href="#">Indie</a>
                <a href="#">Open World</a>
                <a href="#">Simulator</a>
                <a href="#">Fanasty</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
      <?php
       // print_r($_SESSION); 
        ?>
        <div class="row align-items-center">
          <div class="col-md-6">
           <!--  <img src="images/gamelogos.jpg" alt="Image" class="img-fluid rounded"> -->
          </div>
          <div class="col-md-10 ml-auto">
            <h2 class="text-primary mb-3">Why should you do The Vault?</h2>
            <!-- <p>We do gaming differently. We dont nickel and dime, instead, we charge a flat rate for a single, solid product.</p>
            <p class="mb-4">No hidden fees or prices. Enjoy access to a wide and diverse collection of games from top developers. Discover new games
              or play your favorites, all for one low subscription price.</p> -->

            <ul class="ul-check list-unstyled primary">
              <li> Functionalities: We offer our users the option of a monthly,
                6 month, or annual subscription plan that offers the entirety of our
                library for the duration of the subscription of your choice
                </li>
              <li>Benefits: Not sure what game to play? Worried about the
                hassles of returns and hidden late fees? Through our subscription
                plan, that’s all a thing of the past.</li>
              
              <li> Differentiating factors: With gaming in the modern day, users
                are faced with knowledge of the ever-depreciating cost of new
                releases, and have to choose between buying a game now that will lose
                value, or wait and delay their potential enjoyment of a future game.
                Our platform offers users the opportunity to play latest and greatest
                without straining their wallet, so you can game more, play more, save
                more.</li>
            </ul>
              <p><a href="register.php" class="">Sign Up for a Free Trial</a></p>
          </div>
        </div>
      </div>
    </div>


        
  

    <div class="site-section bg-light">
      <div class="container">
        
        
        <div class="row">
          <div class="col-12">
            <h2 class="h5 mb-4 text-black">Featured Games</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">
              
                <div class="d-block d-md-flex listing vertical">

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
                  <div class="d-block d-md-flex listing vertical">
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
                    <div class="d-block d-md-flex listing vertical">
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
  
<!--             </div>
            <div class="col-lg-6"> -->
                <div class="d-block d-md-flex listing vertical">
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
              <div class="d-block d-md-flex listing vertical">
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
            <div class="d-block d-md-flex listing vertical">
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
    </div>
    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Categories</h2>
            <!-- <p class="color-black-opacity-5">What types of games are people playing?</p>  -->
          </div>
        </div>
        <div class="overlap-category mb-5">
          <div class="row align-items-flex no-gutters">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="icon-flag-checkered"></span></span>
                <span class="caption mb-2 d-block">Cars &amp; Racing</span>
                <span class="number">1,921</span>
              </a>
            </div>

            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="icon-user"></span></span>
                <span class="caption mb-2 d-block">Single Player</span>
                <span class="number">25,339</span>
              </a>
            </div>

            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="icon-home"></span></span>
                <span class="caption mb-2 d-block">Indie</span>
                <span class="number">4,398</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="icon-book"></span></span>
                <span class="caption mb-2 d-block">Action &amp; Adventure</span>
                <span class="number">9,298</span>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="icon-group"></span></span>
                <span class="caption mb-2 d-block">Multiplayer</span>
                <span class="number">20,932</span>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="icon-ellipsis-h"></span></span>
                <span class="caption mb-2 d-block">Other</span>
                <span class="number">59,183</span>
              </a>
            </div>
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
    
    <!-- <div class="site-section bg-white">
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



   <!--  <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Our Blog</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
              <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
              <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid rounded">
              <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
              <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid rounded">
              <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
              <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div>
          </div>

          <div class="col-12 text-center mt-4">
            <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
          </div>
        </div>
      </div>
    </div>
 -->
    
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