<?php
/**
 * Not found template.
 *
 * @package AI_RemoteHire
 */
get_header();
?>
<main id="primary" class="site-main">
	<section class="empty-state airh-container">
		<p class="eyebrow">404</p>
		<h1><?php esc_html_e( 'This page could not be found.', 'ai-remotehire' ); ?></h1>
		<p><?php esc_html_e( 'The address may have changed. Search the site or return to the homepage.', 'ai-remotehire' ); ?></p>
		<?php get_search_form(); ?>
		<p><a class="wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return home', 'ai-remotehire' ); ?></a></p>
	</section>
</main>
<?php get_footer(); ?>
