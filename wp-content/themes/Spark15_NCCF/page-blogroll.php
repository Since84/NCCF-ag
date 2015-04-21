<?php
get_header();

$context 	= Timber::get_context();
$post		= new TimberPost();

// Header 
$headerContext 	= array(
	"logo"		=>	get_header_image()
	,"nav"		=>	new TimberMenu( "main-nav" )
);
$headerContext = array_merge($headerContext, $context);
$context["header"] = Timber::compile("view/section/header.twig", $headerContext);

// Blog
$blogArgs = array(
	'post_type'	=> 'post'
);
$blogPosts = Timber::get_posts($blogArgs);
$context['post'] = $post;

$blogListContext = array( 
	"header"		=> "Blog"
	,"feed" 			=> $blogPosts
	,"spark_class" 	=> "blog-list"
);
$context["blog_list"] = Timber::compile("views/components/post_list.twig", $blogListContext);

$blogFeedContext = array( 
	"feed" => $blogPosts
	,"spark_class" => "blog"
	,"slide_template" => "view/content/blog_post_preview.twig"
);
$context["blog_roll"] = Timber::compile("views/components/static_feed.twig", $blogFeedContext);

Timber::render('view/page/blog.twig', $context);

get_footer();