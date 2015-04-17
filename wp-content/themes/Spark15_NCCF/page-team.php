<?php
get_header();

$context 	= Timber::get_context();
$post		= new TimberPost();

// Team Accordion 
$teamPost = new TimberPost("Team");
$teamFeedContext = array( 
	"feed" => $teamPost->get_field('team') 
);
$context["team_accordion"] = Timber::compile("view/section/team-accordion.twig", $teamFeedContext);

Timber::render('view/page/team.twig', $context);

get_footer();