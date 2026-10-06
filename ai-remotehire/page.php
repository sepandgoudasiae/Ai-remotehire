<?php
/**
 * Page template.
 *
 * @package AI_RemoteHire
 */
get_header();
?>
<main id="primary" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry airh-container' ); ?>>
			<header class="entry-header">
				<p class="eyebrow"><?php esc_html_e( 'AI-RemoteHire', 'ai-remotehire' ); ?></p>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
