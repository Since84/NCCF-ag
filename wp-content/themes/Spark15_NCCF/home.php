<?php
get_header();

$context 	= Timber::get_context();
$post		= new TimberPost();

// Header 
$headerContext 	= array(
	"logo"		=>	get_header_image()
	,"nav"		=>	new TimberMenu( "main-nav" )
);
$context["header"] = Timber::compile("view/section/header.twig", $headerContext);

// Team Accordion 
$context["team_slider"] = Timber::compile("view/section/team-slider.twig");

// Blog Nav 
$updatesnavContext = array( "nav"	=>	new TimberMenu( "updates-nav" ));
$context["updates_nav"] = Timber::compile("views/components/nav.twig", $updatesnavContext);

// Video Feed 
$videoFeedContext = array( 
	 "slide_template" => 'views/content/video'
	,"feed" => $post->videos 
);
$context['video_feed'] = Timber::compile('views/components/raw_feed.twig', $videoFeedContext);

// Shop 
$productFeedContext = array( 
	 "slide_template" => 'views/content/product'
	,"feed" => $post->products 
);
$context['product_feed'] = Timber::compile('views/components/raw_feed.twig', $videoFeedContext);

// Logos 
$sponsorFeedContext = array( 
	 "slide_template" => 'views/content/sponsor'
	,"feed" => $post->sponsors 
);
$context['sponsor_feed'] = Timber::compile('views/components/raw_feed.twig', $videoFeedContext);

// Contact Form 
$context['contact'] = do_shortcode( '[contact-form-7 id="4" title="Contact Us"]' );

Timber::render('view/page/home.twig', $context);

get_footer();