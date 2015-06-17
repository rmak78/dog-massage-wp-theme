<?php

?>
<!-- carousel starts  -->    
<div class="carousel-content">       
  <div class="container"> 
    <h1>Click on our faces!</h1> 
      <p>we’re some of the canines that have benefited from the wonderful massage treatment by Pawssage!</p>     
          <div id="owl-carousel" class="owl-carousel">
			  <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage1.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage2.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage3.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                <?php
				$wp_query = new WP_Query( array('category_name' => 'DogFaces') );
				while($wp_query->have_posts()):$wp_query->the_post();
				endwhile;
				wp_reset_postdata();
				?>
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage4.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage5.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage1.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage2.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage3.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage4.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage5.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
         </div> <!--carousel-->     
	 </div><!--container --> 
  </div><!--carousel-content-->         
<!-- carousel ends  -->  