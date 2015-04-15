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
$teamPost = new TimberPost("Team");
$teamFeedContext = array( 
	 "slide_template" => 'view/content/member.twig'
	,"feed" => $teamPost->get_field('team') 
);
$context["team_slider"] = Timber::compile("view/section/team-slider.twig", $teamFeedContext);

// Blog Nav 
$updatesnavContext = array( 
	"nav"	=>	new TimberMenu( "updates-nav" )
	,"spark_class" => "updates"
);
$context["updates_nav"] = Timber::compile("view/content/update-nav.twig", $updatesnavContext);

// Video Feed 
$videoFeedContext = array( 
	 "slide_template" => 'view/content/video.twig'
	,"feed" => get_field('videos') 
	,"spark_class" => "videos"
);
$context['video_feed'] = Timber::compile('views/components/raw_feed.twig', $videoFeedContext);

// Shop 
$productFeedContext = array( 
	 "slide_template" => 'view/content/product.twig'
	,"feed" => get_field('products') 
);
$context['product_feed'] = Timber::compile('views/components/raw_feed.twig', $productFeedContext);

// Logos 
$sponsorFeedContext = array( 
	 "slide_template" => 'view/content/sponsor.twig'
	,"feed" => get_field('sponsors') 
);
$context['sponsor_feed'] = Timber::compile('views/components/raw_feed.twig', $sponsorFeedContext);

// Contact Form 
$context['contact'] = do_shortcode( '[contact-form-7 id="4" title="Contact Us"]' );



Timber::render('view/page/home.twig', $context);

get_footer();