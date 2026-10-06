<?php
/**
 * Site footer.
 *
 * @package AI_RemoteHire
 */
$email     = sanitize_email( get_theme_mod( 'airh_email', 'help@ai-remotehire.com' ) );
$phone     = sanitize_text_field( get_theme_mod( 'airh_phone', '(714) 650-1976' ) );
$secondary = sanitize_text_field( get_theme_mod( 'airh_phone_secondary', '(888) 668-3304' ) );
$address   = sanitize_text_field( get_theme_mod( 'airh_address', '300 Spectrum Center Dr, Irvine, CA 92618' ) );
$hours     = sanitize_text_field( get_theme_mod( 'airh_hours', 'Monday–Friday, 8:00 AM–5:00 PM' ) );
?>
<footer class="site-footer">
	<div class="airh-container airh-container--wide site-footer__grid">
		<div class="site-footer__brand">
			<a class="site-title site-title--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="site-title__ai">AI</span><span>-RemoteHire</span>
			</a>
			<p><?php esc_html_e( 'Remote staffing and recruiting support for businesses building dependable distributed teams.', 'ai-remotehire' ); ?></p>
		</div>
		<div>
			<h2 class="site-footer__heading"><?php esc_html_e( 'Explore', 'ai-remotehire' ); ?></h2>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 1,
				)
			);
			?>
		</div>
		<div>
			<h2 class="site-footer__heading"><?php esc_html_e( 'Contact', 'ai-remotehire' ); ?></h2>
			<ul class="site-footer__contact">
				<li><a href="mailto:<?php echo esc_attr( antispambot( $email ) ); ?>"><?php echo esc_html( antispambot( $email ) ); ?></a></li>
				<li><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></li>
				<li><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $secondary ) ); ?>"><?php echo esc_html( $secondary ); ?></a></li>
				<li><?php echo esc_html( $address ); ?></li>
				<li><?php echo esc_html( $hours ); ?></li>
			</ul>
		</div>
	</div>
	<div class="airh-container airh-container--wide site-footer__legal">
		<p>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> AI-Companies LLC d/b/a AI Remote Hire.</p>
		<p><a href="<?php echo esc_url( get_privacy_policy_url() ? get_privacy_policy_url() : home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'ai-remotehire' ); ?></a></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
