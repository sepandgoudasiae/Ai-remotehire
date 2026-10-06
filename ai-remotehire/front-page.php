<?php
/**
 * Front page template.
 *
 * @package AI_RemoteHire
 */
get_header();
?>
<main id="primary" class="site-main site-main--front">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>
</main>
<?php get_footer(); ?>
