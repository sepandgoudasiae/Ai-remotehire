<?php
/**
 * Search form.
 *
 * @package AI_RemoteHire
 */
$airh_search_id = wp_unique_id( 'airh-search-' );
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $airh_search_id ); ?>"><?php esc_html_e( 'Search the site', 'ai-remotehire' ); ?></label>
	<div class="search-form__row">
		<input id="<?php echo esc_attr( $airh_search_id ); ?>" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search…', 'ai-remotehire' ); ?>">
		<button type="submit"><?php esc_html_e( 'Search', 'ai-remotehire' ); ?></button>
	</div>
</form>
