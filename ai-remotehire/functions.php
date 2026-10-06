<?php
/**
 * AI-RemoteHire theme functions.
 *
 * @package AI_RemoteHire
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AIRH_VERSION', '0.2.0' );
define( 'AIRH_DIR', get_template_directory() );
define( 'AIRH_URI', get_template_directory_uri() );

require_once AIRH_DIR . '/inc/customizer.php';
require_once AIRH_DIR . '/inc/starter-content.php';

function airh_setup() {
	load_theme_textdomain( 'ai-remotehire', AIRH_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor.css' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 320,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary navigation', 'ai-remotehire' ),
			'footer'  => __( 'Footer navigation', 'ai-remotehire' ),
		)
	);
}
add_action( 'after_setup_theme', 'airh_setup' );

function airh_enqueue_assets() {
	wp_enqueue_style( 'airh-style', get_stylesheet_uri(), array(), AIRH_VERSION );
	wp_enqueue_style( 'airh-site', AIRH_URI . '/assets/css/site.css', array( 'airh-style' ), AIRH_VERSION );
	wp_enqueue_script( 'airh-navigation', AIRH_URI . '/assets/js/navigation.js', array(), AIRH_VERSION, true );
	wp_script_add_data( 'airh-navigation', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'airh_enqueue_assets' );

function airh_register_pattern_category() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'airh',
			array( 'label' => __( 'AI-RemoteHire', 'ai-remotehire' ) )
		);
	}
}
add_action( 'init', 'airh_register_pattern_category' );

function airh_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'airh-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'airh_body_classes' );

function airh_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'airh_excerpt_more' );

function airh_fallback_menu() {
	$items = array(
		__( 'Solutions', 'ai-remotehire' )    => home_url( '/solutions/' ),
		__( 'How It Works', 'ai-remotehire' ) => home_url( '/how-it-works/' ),
		__( 'About', 'ai-remotehire' )        => home_url( '/about/' ),
		__( 'Insights', 'ai-remotehire' )     => home_url( '/insights/' ),
	);
	echo '<ul class="menu">';
	foreach ( $items as $label => $url ) {
		printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( $url ), esc_html( $label ) );
	}
	echo '<li class="menu-item-cta"><a href="' . esc_url( home_url( '/request-talent/' ) ) . '">' . esc_html__( 'Request Talent', 'ai-remotehire' ) . '</a></li>';
	echo '</ul>';
}

function airh_contact_shortcode() {
	$form_shortcode = trim( (string) get_theme_mod( 'airh_form_shortcode', '' ) );
	if ( $form_shortcode ) {
		return '<div class="airh-form-embed">' . do_shortcode( $form_shortcode ) . '</div>';
	}

	$email = sanitize_email( get_theme_mod( 'airh_email', 'help@ai-remotehire.com' ) );
	$phone = sanitize_text_field( get_theme_mod( 'airh_phone', '(714) 650-1976' ) );
	$html  = '<div class="airh-contact-fallback">';
	$html .= '<h2>' . esc_html__( 'Tell us what your team needs', 'ai-remotehire' ) . '</h2>';
	$html .= '<p>' . esc_html__( 'Contact AI-RemoteHire directly while the inquiry form integration is being finalized.', 'ai-remotehire' ) . '</p>';
	$html .= '<p><a class="wp-element-button" href="mailto:' . esc_attr( antispambot( $email ) ) . '">' . esc_html( antispambot( $email ) ) . '</a></p>';
	$html .= '<p><a href="tel:' . esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ) . '">' . esc_html( $phone ) . '</a></p>';
	$html .= '</div>';
	return $html;
}
add_shortcode( 'airh_contact', 'airh_contact_shortcode' );

function airh_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href'        => 'https://fonts.googleapis.com',
			'crossorigin' => 'anonymous',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'airh_resource_hints', 10, 2 );
