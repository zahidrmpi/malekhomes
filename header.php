<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Malek Homes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php wp_head(); ?>

</head>

<body <?php body_class() ?>>

<section class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <i class="fa-solid fa-location-dot"></i> California
      </div>
      <div class="col-md-6">
        <i class="fa-regular fa-clock"></i> Open: Mon-Fri 9am to 7pm, Sat 10am to 3Pm, Sun 10am to 3pm
      </div>
      <div class="col-md-3">
        <i class="fa-regular fa-envelope"></i> info@malekhomes.com
      </div>
  </div>
  </div>
</section>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-start">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <div class="logo">
          <?php the_custom_logo (); ?>
        </div>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          
      <?php 
      wp_nav_menu(array(
        'theme_location' => 'primary_menu',
        'menu_id' => 'primary_menu',
        'menu_class' => 'menu'

      ))
        
  
      
      ?>

          <li> <span class="call-now"><i class="fa-sharp fa-solid fa-phone"></i>  <p>Call Now <br>
            888-554-6846</p></span></li>
          <li><button href="#" class="quote-btn"> 
            Request a Quote
          </button></li>
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->