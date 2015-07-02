<div id="footer-widget">
 
    <?php
    /* The footer widget area is triggered if any of the areas
     * have widgets. So let's check that first.
     *
     * If none of the sidebars have widgets, then let's bail early.
     */
    if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    )
        return;
		if (   is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
 
<aside class="fatfooter" role="complementary">
    <div class="first quarter left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second quarter widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third quarter widget-area">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
    <div class="fourth quarter right widget-area">
        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
    </div><!-- .fourth .widget-area -->
</aside><!-- #fatfooter -->
<?php 
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
<aside class="fatfooter" role="complementary">
    <div class="first one-third left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second one-third widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third one-third right widget-area">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
</aside><!-- #fatfooter -->
<?php
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
<aside class="fatfooter" role="complementary">
    <div class="first half left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second half right widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
</aside><!-- #fatfooter -->
<?php
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && ! is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) :
?>
<aside class="fatfooter" role="complementary">
    <div class="first full-width widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
</aside><!-- #fatfooter -->
  <?php  //end of all sidebar checks.
    endif;?>
         
</div>