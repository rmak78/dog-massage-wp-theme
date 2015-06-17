<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	
	 <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
	 <script>
    $(document).ready(function() {
 
     $("#owl-carousel").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
 	    items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,3],

  });
 
});

</script>
	<?php wp_head(); ?>
</head>

<body>

 <div class="navbar-wrapper head">
      <div class="container">
            <div class="col-md-3 col-sm-3 col-xs-4 center">
            <div class="navbar-header">
             <a class="navbar-brand" href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/11.png"></a>
            </div>
            </div><!--md-3-->
            
            <div class="col-md-7 col-sm-7 col-xs-12">
             <div class="row margin-top">
               <div class="col-md-9 col-sm-9 col-xs-8">
                <h1>(209) 986 3516</h1>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-4 top">
                <a href="#" class="msg-btn">Book a Massage</a>
               </div> 
             </div>
            <div class="row">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            
            
            <div id="navbar" class="navbar-collapse collapse">
              <?php include (TEMPLATEPATH . '/top_nav.php'); ?>
             </div> 
            </div> 
            </div><!--md-7--> 
           <div class="col-md-2 col-sm-2 col-xs-3 center mm">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-img_02.png">
           </div>
            
      </div>
    </div>
<!-- carousel starts  -->    
<div class="carousel-content">       
  <div class="container"> 
    <h1>Click on our faces!</h1> 
      <p>we’re some of the canines that have benefited from the wonderful massage treatment by Pawssage!</p>     
          <div id="owl-carousel" class="owl-carousel">
			  <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage1.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage2.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage3.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage4.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage5.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage1.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage2.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage3.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage4.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
                <div class="item">
                  <div class="custom">
                    <a href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pawssage5.png"></a>
                     <div class="eclipse">
                       <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover_03.png"></a>
                     </div>
                  </div>
                </div> 
                
         </div> <!--carousel-->     
	 </div><!--container --> 
  </div><!--carousel-content-->         
<!-- carousel ends  -->  	
 
<div class="orange-bar">
  <div class="container">
    <p><span>Believe it or not:</span> UCD Professor finds <span class="yellow">sleeping</span> with your dog can be        <span class="grey">hazardous to your health.</span></p>
  </div>
</div><!--orange bar-->