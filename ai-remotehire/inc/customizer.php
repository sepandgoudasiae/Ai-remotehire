<?php
/**
 * Customizer settings.
 *
 * @package AI_RemoteHire
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function airh_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'airh_business_details',
		array(
			'title'       => __( 'Business details', 'ai-remotehire' ),
			'description' => __( 'Public contact details shown in the theme. Confirm these before launch.', 'ai-remotehire' ),
			'priority'    => 30,
		)
	);

	$settings = array(
		'airh_email' => array(
			'label'    => __( 'Public email', 'ai-remotehire' ),
			'default'  => 'help@ai-remotehire.com',
			'sanitize' => 'sanitize_email',
			'type'     => 'email',
		),
		'airh_phone' => array(
			'label'    => __( 'Primary phone', 'ai-remotehire' ),
			'default'  => '(714) 650-1976',
			'sanitize' => 'sanitize_text_field',
			'type'     => 'text',
		),
		'airh_phone_secondary' => array(
			'label'    => __( 'Secondary phone', 'ai-remotehire' ),
			'default'  => '(888) 668-3304',
			'sanitize' => 'sanitize_text_field',
			'type'     => 'text',
		),
		'airh_address' => array(
			'label'    => __( 'Public address', 'ai-remotehire' ),
			'default'  => '300 Spectrum Center Dr, Irvine, CA 92618',
			'sanitize' => 'sanitize_text_field',
			'type'     => 'text',
		),
		'airh_hours' => array(
			'label'    => __( 'Business hours', 'ai-remotehire' ),
			'default'  => 'Monday–Friday, 8:00 AM–5:00 PM',
			'sanitize' => 'sanitize_text_field',
			'type'     => 'text',
		),
		'airh_form_shortcode' => array(
			'label'    => __( 'Approved form shortcode', 'ai-remotehire' ),
			'default'  => '',
			'sanitize' => 'sanitize_text_field',
			'type'     => 'text',
		),
	);

	foreach ( $settings as $id => $args ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $args['default'],
				'sanitize_callback' => $args['sanitize'],
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => $args['label'],
				'section' => 'airh_business_details',
				'type'    => $args['type'],
			)
		);
	}
}
add_action( 'customize_register', 'airh_customize_register' );
