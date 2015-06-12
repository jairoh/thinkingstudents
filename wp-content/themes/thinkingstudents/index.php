<?php 

get_header();
	
	if ( is_search() ): ?>
		<p>Search results for: "<?php the_search_query(); ?>"</p>
	<?php endif;

	//loop through the posts and output them in the page
	if ( have_posts() ):
		while( have_posts() ): the_post();
			get_template_part( 'content' );
		endwhile;
	else:
		echo "<p>No cotent found.</p>";
	endif;

get_footer();

?>