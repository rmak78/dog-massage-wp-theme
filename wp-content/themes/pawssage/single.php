<?php get_header(); ?>
<div class="main-content">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-9">
          <div class="main-content-top">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				<!--	<span>Categories<?php // the_category($post_id); ?></span> -->
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>
	  </div><!--main content top-->		

 
		  <div class="main-content-lower">
                    <div class="row">
                     <div class="col-md-12 col-sm-12">
	<?php comments_template(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
                    
                     </div><!--col-md-8-->
                          
                    </div> <!--row--> 
                   </div><!--main content lower-->         
                      

        </div><!--col-md-9-->
        
 <?php get_sidebar(); ?>
 
      </div><!--row contains whole main content-->
    </div><!--col-md-12 placed to adjust the row margin-->
  </div><!--container-->
</div><!--main content-->  
 

<?php get_footer(); ?>	