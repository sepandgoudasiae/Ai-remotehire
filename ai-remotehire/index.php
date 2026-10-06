<?php
/**
 * Main index template.
 *
 * @package AI_RemoteHire
 */
get_header();
?>
<main id="primary" class="site-main">
	<header class="archive-header airh-container">
		<p class="eyebrow"><?php esc_html_e( 'Insights', 'ai-remotehire' ); ?></p>
		<h1><?php single_post_title(); ?></h1>
		<p><?php esc_html_e( 'Practical guidance for planning and supporting remote teams.', 'ai-remotehire' ); ?></p>
	</header>
	<div class="post-grid airh-container airh-container--wide">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
	<div class="airh-container pagination-wrap"><?php the_posts_pagination(); ?></div>
</main>
<?php get_footer(); ?>
