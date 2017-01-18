<footer class="blog-footer container-fluid">
  <div class="row">
    <div class="col-sm-6 text-center">
         <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    </div>
    <div class="col-sm-6">
      <nav class="navbar">
          <div class="container">
            <div class="collapse navbar-collapse" id="myNavbar">
                 <?php 
                   $defaults = array(
                          'container'      => 'ul',
                          'theme_location' => 'secondary',
                          'menu_class'     => 'nav navbar-nav',
                       );
                    wp_nav_menu($defaults);   
                  ?>
            </div> <!-- navbar-collapse -->
          </div> <!-- container-fluid -->
      </nav> <!-- nav -->
    </div> <!-- .col-sm-6 -->
  </div> <!-- .row -->
</footer>

<?php wp_footer() ; ?>
</body>
</html>