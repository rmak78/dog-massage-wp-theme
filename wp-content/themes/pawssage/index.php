<?php
/**
*  Index Template
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
						<?php if ( is_home() && ! is_front_page() ) : ?>
					<div class="bread-crumb"><h2><?php echo get_the_title(); ?></h2></div>
					<BR/>
				<?php endif; ?>
					<?php // The Loop
						while ( have_posts() ) : the_post(); ?>
									<h2 style="color: #FC9B03;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" style="color: #FC9B03;"><?php the_title(); ?></a></h2>
						<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
						<div class="entry">
							<div class="row-fluid">
								<div style="display:inline-block; width:15%; float:left; padding-left:5px">
							<?php 
									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										the_post_thumbnail( array(100, 100) );
									} 
									?>
									</div>
								<div id="post-meta" style="display:inline-block; width:80%">		
								<?php the_excerpt(); ?>
								</div>
							</div>
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
