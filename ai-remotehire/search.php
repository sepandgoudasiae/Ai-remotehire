<?php
/**
 * Search results template.
 *
 * @package AI_RemoteHire
 */
get_header();
?>
<main id="primary" class="site-main">
	<header class="archive-header airh-container">
		<p class="eyebrow"><?php esc_html_e( 'Search', 'ai-remotehire' ); ?></p>
		<h1><?php printf( esc_html__( 'Results for “%s”', 'ai-remotehire' ), esc_html( get_search_query() ) ); ?></h1>
		<?php get_search_form(); ?>
	</header>
	<div class="post-grid airh-container airh-container--wide">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'search' ); endwhile; else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
	</div>
	<div class="airh-container pagination-wrap"><?php the_posts_pagination(); ?></div>
</main>
<?php get_footer(); ?>
