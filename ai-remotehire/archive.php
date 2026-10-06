<?php
/**
 * Archive template.
 *
 * @package AI_RemoteHire
 */
get_header();
?>
<main id="primary" class="site-main">
	<header class="archive-header airh-container">
		<p class="eyebrow"><?php esc_html_e( 'Archive', 'ai-remotehire' ); ?></p>
		<?php the_archive_title( '<h1>', '</h1>' ); ?>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
	</header>
	<div class="post-grid airh-container airh-container--wide">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
	</div>
	<div class="airh-container pagination-wrap"><?php the_posts_pagination(); ?></div>
</main>
<?php get_footer(); ?>
