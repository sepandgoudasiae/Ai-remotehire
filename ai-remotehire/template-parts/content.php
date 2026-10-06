<?php
/**
 * Post card.
 *
 * @package AI_RemoteHire
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="post-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail( 'medium_large' ); ?></a>
	<?php endif; ?>
	<div class="post-card__body">
		<p class="entry-meta"><?php echo esc_html( get_the_date() ); ?></p>
		<?php the_title( '<h2 class="post-card__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
		<div class="post-card__excerpt"><?php the_excerpt(); ?></div>
		<a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read article', 'ai-remotehire' ); ?><span aria-hidden="true"> →</span></a>
	</div>
</article>
