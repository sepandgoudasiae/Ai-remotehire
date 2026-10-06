<?php
/**
 * Site header.
 *
 * @package AI_RemoteHire
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ai-remotehire' ); ?></a>
<header class="site-header" data-site-header>
	<div class="site-header__inner airh-container airh-container--wide">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="site-title__ai">AI</span><span>-RemoteHire</span>
				</a>
			<?php endif; ?>
		</div>

		<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false" data-menu-toggle>
			<span class="menu-toggle__label"><?php esc_html_e( 'Menu', 'ai-remotehire' ); ?></span>
			<span class="menu-toggle__icon" aria-hidden="true"><span></span><span></span></span>
		</button>

		<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'ai-remotehire' ); ?>" data-primary-nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_id'        => 'primary-menu',
					'fallback_cb'    => 'airh_fallback_menu',
					'depth'          => 2,
				)
			);
			?>
		</nav>

		<button class="theme-toggle" type="button" aria-label="<?php esc_attr_e( 'Switch color theme', 'ai-remotehire' ); ?>" data-theme-toggle>
			<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.42-1.42M17.66 6.34l1.41-1.41"/></svg>
		</button>
	</div>
</header>
