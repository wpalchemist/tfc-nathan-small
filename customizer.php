<?php
/**
 * TFC Nathan Small Theme Customizer.
 *
 * @package TFC_Nathan_Small
 */

/**
 * Add new section to the customizer
 */
function tfc_nathan_small_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'tfc_nathan_small_options',
        array(
            'title' => __( 'TFC Theme Settings', 'tfc-nathan-small' ),
            'description' => __( 'Settings specific to the TFC theme for Nathan Small', 'tfc-nathan-small' ),
            'priority' => 140,
            'sanitize_callback' => 'tfc_nathan_small_sanitize_textarea',
        )
    );

    $wp_customize->add_setting(
        'blue_bar',
        array(
            'default' => __( 'Blue bar at top of site', 'tfc-nathan-small' ),
        )
    );

    $wp_customize->add_control(
        'blue_bar',
        array(
            'label' => __( 'Blue bar text', 'tfc-nathan-small' ),
            'section' => 'tfc_nathan_small_options',
            'type' => 'textarea',
        )
    );

}
add_action( 'customize_register', 'tfc_nathan_small_customizer' );


/**
 * Sanitize a textarea.
 *
 * @param $input
 * @return string
 */
function tfc_nathan_small_sanitize_textarea( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

