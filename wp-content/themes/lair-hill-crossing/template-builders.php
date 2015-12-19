<?php
/**
 * Template Name: Builders
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<main id="main" class="site-main" role="main">

				<div class="entry-content">
					<div class="bio">
						<?php the_field('construction_manager'); ?>
					</div>
					<div class="bio">
						<?php the_field('interior_designer'); ?>
					</div>
					<div class="bio">
						<?php the_field('next_bio'); ?>
					</div>
				</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
