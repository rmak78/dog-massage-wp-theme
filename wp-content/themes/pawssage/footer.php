     <!-- FOOTER -->
      <footer>
        <div class="container">
          <div class="row">

            <div id="copy-right" class="col-md-4 col-sm-4" >

						
              <p>&copy; 2009 - 2015 <?php echo get_bloginfo('site_title'); ?> </p> 
            </div> 
		<!-- sutlej Logo start  -->
		 <div id="sutlej-brand" class="col-md-3 col-sm-3">
					<div class="w1-ttl">            
					<ul class="ttl">
					<li>A SUTLEJ</li>
					<li class="logo"><a href="http://www.sutlej.net/" target="_blank" rel="Sutlej Creation" style="margin-top: 12px; height: 27px;">Sutlej</a></li>
					<li>NET CREATION</li>
					</ul>
       					 </div>
			</div>			 
			<!--   sutlej Logo End --> 
            <div id="footer-menu" class="col-md-5 col-sm-5">
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
