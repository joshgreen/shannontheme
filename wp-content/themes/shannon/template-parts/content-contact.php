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
			<div class="contact-icons">
				<img src="<?php bloginfo('template_url'); ?>/images/phone-l.svg" alt="">
			</div>
	  <h1 itemprop="name" class="hide">The Shannon Group</h1>
			T: <span itemprop="telephone"><a href="tel:44-01895-448-111">+44 (0)1895 448 111</a></span><br>
			F: <span itemprop="fax">+44 (0)1895 449 111</span>
		</div>
		<div class="address">
			<div class="contact-icons">
				<img src="<?php bloginfo('template_url'); ?>/images/map-marker-l.svg" alt="">
			</div>
			The Shannon Group<br>
			Dromenagh Farm<br>
			Seven Hills Road<br>
			Iver, Buckinghamshire<br>
			SL0 0PA
		</div>
		<div class="web">
			<div class="contact-icons">
				<img src="<?php bloginfo('template_url'); ?>/images/envelope-l.svg" alt="">
			</div>
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

	<section class="contact-map">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d39695.49566454867!2d-0.517397!3d51.550477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48766e537d35c711%3A0x13ee45ac3cec172c!2sDromenagh+Farm%2C+Iver+Heath%2C+Iver%2C+Buckinghamshire+SL0+0PA%2C+UK!5e0!3m2!1sen!2sus!4v1456668776827" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>


</article><!-- #post-## -->
