<?php
/**
 * Template Name: Condos
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<main id="main" class="site-main" role="main">

				<div class="entry-content">
					<div class="gallery">
					
					<?php $args = array( 'post_type' => 'condo_posts', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					  echo '<div class="entry-content gallery-columns-2 gallery-item">';
					  echo '<a href="';
					  the_permalink();
					  echo '">';
					  the_post_thumbnail();
					  echo '<h2>';
					  the_title();
					  echo '</h2>';
					  echo '</a>';
					  echo '</div>';
					endwhile; ?>
					
					</div>
				</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
