<?php get_header(); ?>
<div class="main-content">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-9">
          <div class="main-content-top">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			

			<?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

	  </div><!--main content top-->		

		</div>
		  <div class="main-content-lower">
                    <div class="row">
                     <div class="col-md-8 col-sm-8">
		<?php  comments_template(); ?>

		<?php endwhile; endif; ?>

          
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