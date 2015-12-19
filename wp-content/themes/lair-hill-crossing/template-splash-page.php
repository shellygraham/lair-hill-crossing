<?php
/**
 * Template Name: Splash Page
 *
 */

get_header('splash'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>Lair Hill Crossing</h1>
			<h2><?php echo get_bloginfo ( 'description' );  ?></h2>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer('splash'); ?>
