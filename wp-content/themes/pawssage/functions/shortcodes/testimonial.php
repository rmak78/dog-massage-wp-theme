<?php

function testimonial_func( $atts, $content = null ) { // New function parameter $content is added!
   
   extract(shortcode_atts(array(
		'width' => '1/2',
		'el_position' => '',
		'testimonial' => '',
		'testimonial_image' => '',
		'testimonial_name' => '',
		'testimonial_job_title' => '',
		'testimonial_url' => '',
		'testimonial_url_text' => ''
	), $atts));

	$width_class = '';//wpb_translateColumnWidthToSpan($width); // Determine width for our div holder
	
	$output  = '';
	
	$image_attributes = wp_get_attachment_image_src($testimonial_image, 'full'); // returns an array
	
	$output  .= '<article>';
	$output  .= '<img src="'.$image_attributes[0].'" alt="" class="avatar" />';
	$output  .= '<blockquote>';
		$output  .= wpb_js_remove_wpautop($content);
		$output  .= '<cite><strong>'.$testimonial_name.'</strong> '.$testimonial_job_title;
		if($testimonial_url && $testimonial_url_text): $output  .= ' - <a href="'.$testimonial_url.'">'.$testimonial_url_text.'</a>'; endif; 
		$output  .= '</cite>';
	$output  .= '</blockquote>';
	$output  .= '</article>';

	return $output;

}
add_shortcode( 'testimonial', 'testimonial_func' );

if( function_exists('vc_set_as_theme') ) {
vc_map( array(
	"base"		=> "testimonial",
    "name"		=> __("Testimonial", "js_composer"),
    "class"		=> "",
    "icon"      => "testimonial",
    "params"	=> array(
        array(
            "type" => "textarea_html",
            "class" => "",
            "heading" => __("Testimonial", "js_composer"),
            "param_name" => "content",
			"admin_label" => true,
			"holder" => "div",
            "value" => __("", "js_composer"),
            "description" => __("Enter the testimonial", "js_composer")
        ),
		array(
            "type" => "attach_image",
            "class" => "",
            "heading" => __("Image", "js_composer"),
            "param_name" => "testimonial_image",
            "value" => __("", "js_composer"),
            "description" => __("Insert an image for the person giving the testimonial (81x81px)", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Name", "js_composer"),
            "param_name" => "testimonial_name",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the name of the person giving the tetimonial", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Job Title", "js_composer"),
            "param_name" => "testimonial_job_title",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the 'job title, company' of the person giving the testimonial", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Company URL", "js_composer"),
            "param_name" => "testimonial_url",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the company URL of the person giving the testimonial", "js_composer")
        ),
		array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Company Name", "js_composer"),
            "param_name" => "testimonial_url_text",
			"admin_label" => true,
            "value" => __("", "js_composer"),
            "description" => __("Enter the company name of the person giving the testimonial", "js_composer")
        )
    )
));
}



?>