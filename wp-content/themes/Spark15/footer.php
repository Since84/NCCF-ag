<?php 
	// Footer 
	$footerContext 	= array(
		"logo"		=>	get_header_image()
	);
	Timber::render("view/section/footer.twig", $footerContext);

	wp_footer(); 
?>
</body>
</html>