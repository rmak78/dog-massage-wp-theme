<?php get_header(); ?>
<div class="main-content">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-9">
          <div class="main-content-top">
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>


                   </div><!--main content lower-->         
                      

        </div><!--col-md-9-->
        
 <?php get_sidebar(); ?>
 
      </div><!--row contains whole main content-->
    </div><!--col-md-12 placed to adjust the row margin-->
  </div><!--container-->
</div><!--main content--> 

<?php get_footer(); ?>