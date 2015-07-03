<?php
/**
*  Category Template
*/

get_header(); ?> 
<div class="main-content">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-9">
          <div class="main-content-top">
				<?php 
				// Check if there are any posts to display
				if ( have_posts() ) : ?>

						
						<div class="bread-crumb"><h2>Category: <?php single_cat_title( '', true); ?></h3></div>


						<?php
						// Display optional category description
						 if ( category_description() ) : ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>
					

						<?php

						// The Loop
						while ( have_posts() ) : the_post(); ?>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" style="color: rgb(252, 155, 3);"><?php the_title(); ?></a></h2>
						<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

						<div class="entry">
						<?php the_excerpt(); ?>

						 <p class="postmetadata"><?php
						  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
						?></p>
						</div>
							<HR/>
						<?php endwhile; 

						else: ?>
						<p>Sorry, no posts matched your criteria.</p>


				<?php endif; ?>


                   </div><!--main content lower-->         
                      

        </div><!--col-md-9-->
        
 <?php get_sidebar(); ?>
 
      </div><!--row contains whole main content-->
    </div><!--col-md-12 placed to adjust the row margin-->
  </div><!--container-->
</div><!--main content-->  
<?php get_footer(); ?>
