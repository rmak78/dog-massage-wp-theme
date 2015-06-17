<?php

?>    
	<div class="row">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
 <div id="navbar" class="navbar-collapse collapse">
<?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => false,
	'menu_class'      => 'nav navbar-nav top_ul',
	'menu_id'         => 'topmenu',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
         </div>          
 <!--           
           
              <ul class="nav navbar-nav top_ul">
     <li class="active"><a href="index.html">Home</a></li>
     <li><a href="#">About Us</a></li>
     <li><a href="#">Benefits</a></li>
     <li><a href="#">Services</a></li>
     <li><a href="#">Faces</a></li>
     <li><a href="#">Event Calendar</a></li>
     <li><a href="#">FAQ</a></li>
     <li><a href="#">Contact</a></li>
 </ul>
        -->
            </div> 