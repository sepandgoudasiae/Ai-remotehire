<?php
/**
 * Search result.
 *
 * @package AI_RemoteHire
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result' ); ?>>
	<p class="entry-meta"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></p>
	<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
	<?php the_excerpt(); ?>
</article>
