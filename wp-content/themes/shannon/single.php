<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shannon
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main max" role="main">

			<section class="inner">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.

				endwhile; // End of the loop.
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
