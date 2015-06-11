<?php 

get_header();

	echo "<h4>Category: Philosophy</h4>";

	
	$philosophy_posts = new WP_Query( 'cat=6&post_per_page=10' );
	//loop through the posts and output them in the page
	if ( $philosophy_posts->have_posts() ):
		while( $philosophy_posts->have_posts() ): $philosophy_posts->the_post();
			get_template_part( 'content' );
		endwhile;
	else:
		echo "<p>No cotent found.</p>";
	endif;

get_footer();

?>