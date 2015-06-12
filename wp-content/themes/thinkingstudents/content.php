<article class="post">
	
	<?php if ( !is_single() ): ?>
		<div class="thumbnail" >
			<?php the_post_thumbnail( 'small-thumbnail' ); //featured image ?>
		</div>
	<?php endif; ?>

	<h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title() ?></a></h2>
	<p class="post-info">
		<?php the_time( 'F jS, Y g:i a' ); ?> |
		by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> | 
		Posted in 

		<?php 
			$categories = get_the_category();
			$separator = ", ";
			$output = "";

			if ( $categories ) {
				foreach( $categories as $category ) {
					$output .= "<a href='" . get_category_link( $category->term_id ). "'>" . $category->cat_name . "</a>" . $separator;
				}
			}
			echo trim( $output, $separator );
			/*echo "<pre>";
			print_r( get_the_category() );*/
		?>
	</p>



	<?php if ( is_single() ): ?>
		<?php the_post_thumbnail( 'banner-image' ); //featured image ?>
		<p class="post-content" >
			<?php if ( $post->post_excerpt ): ?>
				<?php echo get_the_excerpt(); ?>
				<a href="#">Read more &raquo;</a>
			<?php else: ?>
				<?php the_content( 'Read more &raquo;' );  ?>
			<?php endif; ?>
		</p>
	<?php else: ?>
		<p>
			<?php echo get_the_excerpt(); ?>
		</p>
	<?php endif; ?>

</article>