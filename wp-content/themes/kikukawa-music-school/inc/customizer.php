<?php
/**
 * KIKUKAWA MUSIC SCHOOL Theme Customizer
 *
 * @package KIKUKAWA_MUSIC_SCHOOL
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kikukawa_music_school_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'kikukawa_music_school_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'kikukawa_music_school_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'kikukawa_music_school_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function kikukawa_music_school_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function kikukawa_music_school_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kikukawa_music_school_customize_preview_js() {
	wp_enqueue_script( 'kikukawa-music-school-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'kikukawa_music_school_customize_preview_js' );
