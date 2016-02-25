<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shannon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-image-header-1">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<section class="contact-details">
		<div class="telephone" itemscope itemtype="http://schema.org/LocalBusiness">
	  <h1 itemprop="name" class="hide">The Shannon Group</h1>
			T: <span itemprop="telephone"><a href="tel:44-01895-448-111">+44 (0)1895 448 111</a></span><br>
			F: <span itemprop="fax">+44 (0)1895 449 111</span>
		</div>
		<div class="address">
			The Shannon Group<br>
			Dromenagh Farm<br>
			Seven Hills Road<br>
			Iver, Buckinghamshire<br>
			SL0 0PA
		</div>
		<div class="web">
			<a href="mailto:info@theshannongroup.co.uk">info@theshannongroup.co.uk</a>
			<a href="mailto:sales@theshannongroup.co.uk">sales@theshannongroup.co.uk</a>
		</div>
	</section>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shannon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
