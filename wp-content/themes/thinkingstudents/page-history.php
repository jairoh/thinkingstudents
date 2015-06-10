<?php 

get_header();
	
	$history_posts = new WP_Query( 'cat=4&post_per_page=10' );
	//loop through the posts and output them in the page
	if ( $history_posts->have_posts() ):
		while( $history_posts->have_posts() ): $history_posts->the_post();
			get_template_part( 'content' );
		endwhile;
	else:
		echo "<p>No cotent found.</p>";
	endif;

get_footer();

?>