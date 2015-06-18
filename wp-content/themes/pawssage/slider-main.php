<?php

?>
<!-- carousel starts  -->    
<div class="carousel-content">       
  <div class="container"> 
    <h1>Click on our faces!</h1> 
      <p>we’re some of the canines that have benefited from the wonderful massage treatment by Pawssage!</p>     
          <div id="owl-carousel" class="owl-carousel">
		  
		  
		  
		       <?php
				$args = array('category_name' => 'DogFaces');
				$the_query = new WP_Query( $args );
			 if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="item">
                  <div class="custom">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('class' => ' img-circle ') ); ?></a>
                     <div class="eclipse">
                       <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png" ></a>
                     </div>
                  </div>
                </div>
				
				<?php endwhile; ?><!-- end of the loop -->
				<!-- put pagination functions here -->
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

 

		
                
         </div> <!--carousel-->     
	 </div><!--container --> 
  </div><!--carousel-content-->         
<!-- carousel ends  -->  