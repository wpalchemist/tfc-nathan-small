<?php
/**
 * TFC Nathan Small functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TFC_Nathan_Small
 */



/**
 * Enqueue styles.
 */
function tfc_nathan_small_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'tfc_nathan_small_enqueue_styles' );

/**
 * Enqueue styles for Gutenberg editor.
 */
function tfc_nathan_small_gutenberg_styles() {
    // Load the theme styles within Gutenberg.
    wp_enqueue_style( 'tfc-nathan-small-gutenberg', get_theme_file_uri( 'editor-style.css' ), false, '1.1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'tfc_nathan_small_gutenberg_styles' );

/**
 * Add support for custom color palettes in Gutenberg.
 */
function tfc_nathan_small_gutenberg_color_palette() {
    add_theme_support(
        'editor-color-palette',
        array(
            'name'  => esc_html__( 'Cerulean', 'tfc-nathan-small' ),
            'slug' => 'cerulean',
            'color' => '#0071cf',
        ),
        array(
            'name'  => esc_html__( 'Navy', 'tfc-nathan-small' ),
            'slug' => 'navy',
            'color' => '#021f37',
        ),
        array(
            'name'  => esc_html__( 'Black', 'tfc-nathan-small' ),
            'slug' => 'black',
            'color' => '#000000',
        ),
        array(
            'name'  => esc_html__( 'Azure', 'tfc-nathan-small' ),
            'slug' => 'azure',
            'color' => '#00aef3',
        ),
        array(
            'name'  => esc_html__( 'Cerise Red', 'tfc-nathan-small' ),
            'slug' => 'cerise',
            'color' => '#cf3555',
        ),
        array(
            'name'  => esc_html__( 'Darkish Blue', 'tfc-nathan-small' ),
            'slug' => 'darkish-blue',
            'color' => '#003c7f',
        ),
        array(
            'name'  => esc_html__( 'Grey', 'tfc-nathan-small' ),
            'slug' => 'grey',
            'color' => '#63656a',
        ),
        array(
            'name'  => esc_html__( 'Red', 'tfc-nathan-small' ),
            'slug' => 'red',
            'color' => '#eb3211',
        )
    );
}
add_action( 'after_setup_theme', 'tfc_nathan_small_gutenberg_color_palette' );

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/customizer.php';

/**
 * Display a blue bar at the very top of the site.
 */
function tfc_nathan_small_blue_preheader() {
    echo '<div id="pre-header" class="blue-bar has-azure-background-color">' . wp_kses_post( get_theme_mod( 'blue_bar', 'Set the content of this section in the theme customizer.' ) ) . '</div>';
}

