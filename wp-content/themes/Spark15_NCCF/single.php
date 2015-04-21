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

$blogListContext = array( 
	"header"		=> "Blog"
	,"feed" 			=> $blogPosts
	,"spark_class" 	=> "blog-list"
);
$context["blog_list"] = Timber::compile("views/components/post_list.twig", $blogListContext);


$blogPostContext = array( 
	"post" => new TimberPost()
	,"spark_class" => "blog-post"
);
$context["blog_post"] = Timber::compile("view/content/blog_post.twig", $blogPostContext);

Timber::render('view/page/single.twig', $context);

get_footer();