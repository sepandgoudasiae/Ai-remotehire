<?php
/**
 * Empty content state.
 *
 * @package AI_RemoteHire
 */
?>
<section class="empty-state">
	<h2><?php esc_html_e( 'Nothing matched your request.', 'ai-remotehire' ); ?></h2>
	<p><?php esc_html_e( 'Try a different search or return to the homepage.', 'ai-remotehire' ); ?></p>
	<?php get_search_form(); ?>
</section>
