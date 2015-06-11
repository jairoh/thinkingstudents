<?php 

get_header();
	
	echo "<h4>Category: Science</h4>";

	$science_posts = new WP_Query( 'cat=3&post_per_page=10' );
	//loop through the posts and output them in the page
	if ( $science_posts->have_posts() ):
		while( $science_posts->have_posts() ): $science_posts->the_post();
			get_template_part( 'content' );
		endwhile;
	else:
		echo "<p>No cotent found.</p>";
	endif;

get_footer();

?>