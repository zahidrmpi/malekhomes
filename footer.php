<!-- ======= Footer ======= -->

<footer class="footer">

<div class="container">
  <div class="row">
    <div class="col-md-4">
    <div class="footer-description">
       <?php 
          if(is_active_sidebar('sidebar-1')){
            dynamic_sidebar("sidebar-1");
          }
       ?>
    </div>
    
    </div>
    <div class="col-md-4">
     <div class="footer-offer">
     <?php 
          if(is_active_sidebar('sidebar-2')){
            dynamic_sidebar("sidebar-2");
          }
       ?>
     </div>
    </div>
    <div class="col-md-4">
     <div class="footer-opening-hour">
     <?php 
          if(is_active_sidebar('sidebar-3')){
            dynamic_sidebar("sidebar-3");
          }
       ?>
     </div>
    </div>

  </div>
</div>

</footer>
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-9">
  <div class="copyright">
    &copy; Copyright <strong><span>Malek Homes</span></strong>. All Rights Reserved
  </div>
</div>
<div class="col-md-3">
  <div class="social-icon">
    <ul>
      <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
      <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
     
    </ul>
  </div>
</div>
</div>
</div>
</div>
<!-- ======= End Footer ======= -->


<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
<?php wp_footer(); ?>
</body>

</html>