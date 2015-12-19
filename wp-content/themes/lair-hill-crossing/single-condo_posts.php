<?php
/**
 * The template for displaying condo posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lair-hill-crossing
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<main id="main" class="site-main" role="main">
			<div class="gallery">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="entry-content">
					<div class="main-holder">
						<?php the_content(); ?>
						<div class="description">
							<div class="left">
								<h3>BEDROOMS: <?php the_field('bedrooms'); ?></h3>
								<h3>BATHROOMS: <?php the_field('bathrooms'); ?></h3>
							</div>
							<div class="right">
								<h3>SQUARE FEET: <?php the_field('square_feet'); ?></h3>
								<h3>GARAGE: <?php the_field('garage'); ?></h3>
							</div>
						</div>							
					</div>
					<div class="side-holder">
						<div class="price-details">
							<h3>PRICE: <?php the_field('price'); ?></h3>
							<h3>STATUS: <?php the_field('status'); ?></h3>
						</div>
						<div class="feature-details">
							<?php the_field('interior_features'); ?>
						</div>						
					</div>
				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
