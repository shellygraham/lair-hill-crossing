<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lair-hill-crossing
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="main-holder">
		<?php the_post_thumbnail(); ?>
		<div class="description">
			<?php the_content(); ?>
		</div>							
	</div>
</article><!-- #post-## -->
