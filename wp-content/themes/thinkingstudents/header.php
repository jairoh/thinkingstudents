<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?= bloginfo( 'charset' ); ?>" >
	<meta name="viewport" content="width=device-width" > <!-- responsive -->
	<title><?php bloginfo( 'name' ) ?></title>
	<?php wp_head(); //wordpress automatically add some necessary codes ?>
</head>
<body <?php body_class(); ?>>

	<!-- body container -->
	<div class="body-container">
		
		<!-- banner -->
		<div id="banner">
			<table>
				<tr>
					<td>
						<img id="banner-logo" src="<?php echo get_template_directory_uri() . '/images/TS_logo.png' ?>" />
					</td>
					<td>
						<h1 id="site-name" ><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<h5 id="site-descrip" >Where students tackle the <red>BIG QUESTIONS</red> in life…</h5>
					</td>
					
				</tr>
			</table>
		</div>
		<!-- end banner -->

		<!-- body header -->
		<div class="body-header">
				
			<!-- navigation bar -->
			<nav id="toolbar">
				<?php 
					$args = array(
						'theme_location' => 'primary'
					);
					wp_nav_menu( $args );
				 ?>
			</nav>
			<!-- end navigation bar -->

		</div>
		<!-- end body header -->

		