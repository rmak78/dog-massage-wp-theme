     <!-- FOOTER -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <p>&copy; 2009 - 2015 <?php echo get_bloginfo('site_title'); ?> </p> 
            </div>  
            <div class="col-md-6 col-sm-8 col-md-push-2">
			<?php

$defaults = array(
	'theme_location'  => 'footer',
	'menu'            => 'footer-menu',
	'container'       => false,
	'echo'            => true,
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
);

wp_nav_menu( $defaults );

?>
            </div>
          </div> <!--row-->   
       </div><!--container-->
<?php wp_footer(); ?>       
</body>
</html>
