<?php 

get_header();
	
	echo "<h4>";
	if ( is_category() ):
		single_cat_title( "Category Archives: " );
	elseif ( is_tag() ):
		single_tag_title( "Tag Archives: " );
	elseif ( is_author() ):
		the_post();
		echo "Author Archives: " . get_the_author();	
		rewind_posts();
	elseif ( is_day() ):
		echo "Daily Archives: " . get_the_date();
	elseif ( is_month() ):
		echo "Monthly Archives: " . get_the_date( 'F Y' );
	elseif ( is_year() ):
		echo "Yearly Archives: " . get_the_date( 'Y' );
	else:
		echo "Archives: ";
	endif;
	echo "</h4>";

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