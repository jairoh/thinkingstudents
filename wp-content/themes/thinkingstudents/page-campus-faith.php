<?php 

get_header();
	
	$campus_faith_posts = new WP_Query( 'cat=5&post_per_page=10' );
	//loop through the posts and output them in the page
	if ( $campus_faith_posts->have_posts() ):
		while( $campus_faith_posts->have_posts() ): $campus_faith_posts->the_post();
			get_template_part( 'content' );
		endwhile;
	else:
		echo "<p>No cotent found.</p>";
	endif;

get_footer();

?>