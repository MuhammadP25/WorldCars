

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
        <div class="row">

          <div class="footer-logo col-md-3 col-sm-6 col-12">  
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          </div>
          <!-- ===== Sidebar ===== -->
          <div class="footer-menu col-md-6 col-sm-6 col-12">

              <div class="right-bar right">
                  <h4>وصول سريع</h4>
                  <?php cars_footer_menu();?>
              </div>
                

              <div class="left-bar left">
                  <h4>روابط تهمك</h4>        
                  <?php
                      /*get_sidebar();
                      if (is_active_sidebar('main-sidebar')) {
                          dynamic_sidebar('footer-sidebar');
                      }*/?>
              </div>
        
                

          </div>          

        </div>
      </div>
      
      <div class="footer-copyrights text-center">
              copyrights&copy;2022 Muhammad Al-Qadri
      </div>

  </footer><!-- End Footer -->

        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
              integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>      
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
                integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        
        <?php wp_footer(); ?>
        
    </body>
</html>