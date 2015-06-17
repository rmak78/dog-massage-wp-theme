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
				$posts = get_posts($args);
				foreach($posts as $post){ ?>	
				<div class="item">
                  <div class="custom">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('class' => ' img-circle ') ); ?></a>
                     <div class="eclipse">
                       <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png" ></a>
                     </div>
                  </div>
                </div>
				
				<?php } ?>
				
				
			
                
         </div> <!--carousel-->     
	 </div><!--container --> 
  </div><!--carousel-content-->         
<!-- carousel ends  -->  