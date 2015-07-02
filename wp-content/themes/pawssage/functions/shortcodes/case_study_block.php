<?php

function case_studies_block_func( $atts, $content = null ) { // New function parameter $content is added!
   
   extract(shortcode_atts(array(
		'width' => '1/2',
		'el_position' => '',
		'case_title' => '',
		'case_sub_title' => '',
		'my_dropdown' => ''
	), $atts));

	$width_class = '';//wpb_translateColumnWidthToSpan($width); // Determine width for our div holder
	
	$output  = '';

	$output  .= '<div class="projects-box ' . $width_class . '">';
	$output  .= '<div class="container">';
	$output  .= '<h2>'.$case_title.'</h2>';
	$output  .= '<h3>'.$case_sub_title.'</h3>';
	
	global $post;

	$portposts = get_posts(array('post_type' => 'portfolio-item', 
								 'order' => 'DESC', 
								 'numberposts' => '-1',
								 'suppress_filters' => false
							  )
						  );
						  
	if(count($portposts) > 0):
	$output  .= '<div class="flexslider">';
	$output  .= '<ul class="slides">';
	foreach( $portposts as $post ) : setup_postdata($post);
	$output  .= '<li>';
	$output  .= '<a href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID, 'cta-block-thumb-2').'<span class="eye"></span><span>'.get_the_title().'</span></a>';
	$output  .= '</li>';
	endforeach;
	$output  .= '</ul>';
	$output  .= '</div><!-- / flexslider-->';
	endif;
	$output  .= '</div><!-- / container -->';
	$output  .= '</div><!-- / projects-box -->';
	
	return $output;

}
add_shortcode( 'case_studies_block', 'case_studies_block_func' );

if( function_exists('vc_set_as_theme') ) {
vc_map( array(
	"base"		=> "case_studies_block",
	"name"		=> __("Case Studies Block", "js_composer"),
	"class"		=> "",
	"icon"      => "case-study",
	"params"	=> array(
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Title", "js_composer"),
			"param_name" => "case_title",
			"value" => __("MORE CASE STUDIES", "js_composer"),
			"description" => __("Enter the title for this case studies block", "js_composer")
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Sub Title", "js_composer"),
			"param_name" => "case_sub_title",
			"value" => __("Hand picked for your perusal", "js_composer"),
			"description" => __("Enter the sub title for this case studies block", "js_composer")
		)
	)
));
}



?>