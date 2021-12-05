<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */
/**
 * Loads the child theme text-domain.
 */
function aarambha_blogger_load_language() {
    load_child_theme_textdomain( 'aarambha-blogger' );
}
add_action( 'after_setup_theme', 'aarambha_blogger_load_language' );

/**
 * Enqueue Style for child theme.
 */
function aarambha_blogger_enqueue_scripts() {
    $aarambha_blogger_version = wp_get_theme(get_template())->get( 'Version' );
    wp_enqueue_style('aarambha-blogger-heading', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap', array(), null);
    wp_enqueue_style( 'aarambha-blogger', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'slick-theme','meanmenu','blog-aarambha-style','blog-aarambha-responsive' ), $aarambha_blogger_version );
}
add_action( 'wp_enqueue_scripts', 'aarambha_blogger_enqueue_scripts' );

/**
 * Set default settings when switching themes
 */
function aarambha_blogger_settings() {
    set_theme_mod( 'top_header_section_checkbox', '' );
    set_theme_mod('blog_post_layout_radio_button','grid');
    set_theme_mod('content_type_radio_button','grid');
}
add_action( 'after_switch_theme', 'aarambha_blogger_settings' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function aarambha_blogger_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'aarambha_blogger_excerpt_length' );

/**
 * @param $wp_customize
 */
function aarambha_blogger_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'general_sidebar_home_checkbox',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'sanitize_callback' => 'blog_aarambha_sanitize_checkbox'

        )
    );

    $wp_customize->add_control( 'general_sidebar_home_checkbox',
        array(
            'label'         => esc_html__( 'Enable sidebar in home', 'aarambha-blogger' ),
            'section'       => 'general_theme_option',
            'priority'      => 10,
            'type'          => 'checkbox',
        )
    );
}
add_action( 'customize_register', 'aarambha_blogger_customize_register' );

