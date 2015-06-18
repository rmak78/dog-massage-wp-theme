 <?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Pawssage
 * @since Pawssage 1
 */
?>
         <div class="col-md-3 right">
           <div class="widget">

		  <?php if(is_active_sidebar('right_sidebar')) : ?>
		  <ul>
		  <?php dynamic_sidebar( 'right_sidebar' ); ?>
		  </ul>
		  <?php endif; ?>
		  
		     </div> <!--widget--> 
          </div> <!--col-md-3-->