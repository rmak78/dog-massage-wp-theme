<?php

function cta_box_func( $atts, $content = null ) { // New function parameter $content is added!
   
   extract(shortcode_atts(array(
		'width' => '1/2',
		'el_position' => '',
		'cta_num' => '',
		'cta_title' => '',
		'cta_excerpt' => '',
		'cta_url' => '',
		'cta_button_text' => ''
	), $atts));

	$width_class = '';//wpb_translateColumnWidthToSpan($width); // Determine width for our div holder
	
	$output  = '';
	
	$output  .= '<article class="fade-in box1">';
	$output  .= '<span class="number">'.$cta_num.'</span>';
	$output  .= '<h2>'.$cta_title.'</h2>';
	$output  .= '<p>'.$cta_excerpt.'</p>';
	$output  .= '<p><a href="'.$cta_url.'" class="btn-more">'.$cta_button_text.'</a></p>';
	$output  .= '</article>';

	return $output;

}
add_shortcode( 'cta_box', 'cta_box_func' );

if( function_exists('vc_set_as_theme') ) {
vc_map( array(
	"base"		=> "cta_box",
    "name"		=> __("CTA Box", "js_composer"),
    "class"		=> "",
    "icon"      => "cta_box",
    "params"	=> array(
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Number", "js_composer"),
            "param_name" => "cta_num",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the number of the CTA for inside the circle", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Title", "js_composer"),
            "param_name" => "cta_title",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the title for the CTA", "js_composer")
        ),
		array(
            "type" => "textarea",
            "class" => "",
            "heading" => __("CTA Intro Text", "js_composer"),
            "param_name" => "cta_excerpt",
			"admin_label" => true,
			"holder" => "div",
            "value" => __("", "js_composer"),
            "description" => __("Enter the intro for the CTA", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("URL", "js_composer"),
            "param_name" => "cta_url",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the URL for the button", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Button Text", "js_composer"),
            "param_name" => "cta_button_text",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter text for the button", "js_composer")
        )
    )
));
}



?>