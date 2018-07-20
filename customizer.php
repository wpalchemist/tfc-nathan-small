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
        )
    );

    $wp_customize->add_setting(
        'blue_bar',
        array(
            'default' => __( 'Blue bar at top of site', 'tfc-nathan-small' ),
            'sanitize_callback' => 'tfc_nathan_small_sanitize_textarea',
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

    $wp_customize->add_setting(
        'cta_header',
        array(
            'default' => __( 'Call to Action', 'tfc-nathan-small' ),
            'sanitize_callback' => 'tfc_nathan_small_sanitize_text',
        )
    );

    $wp_customize->add_control(
        'cta_header',
        array(
            'label' => __( 'Footer Call to Action Header', 'tfc-nathan-small' ),
            'section' => 'tfc_nathan_small_options',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'cta_button_text',
        array(
            'default' => __( 'Click Here', 'tfc-nathan-small' ),
            'sanitize_callback' => 'tfc_nathan_small_sanitize_text',
        )
    );

    $wp_customize->add_control(
        'cta_button_text',
        array(
            'label' => __( 'Footer Call to Action Button Text', 'tfc-nathan-small' ),
            'section' => 'tfc_nathan_small_options',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'cta_button_link',
        array(
            'default' => home_url(),
            'sanitize_callback' => 'tfc_nathan_small_sanitize_text',
        )
    );

    $wp_customize->add_control(
        'cta_button_link',
        array(
            'label' => __( 'Footer Call to Action Button Link', 'tfc-nathan-small' ),
            'section' => 'tfc_nathan_small_options',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'cta_text',
        array(
            'default' => __( 'Descriptive text to make clicking irresistible', 'tfc-nathan-small' ),
            'sanitize_callback' => 'tfc_nathan_small_sanitize_textarea',
        )
    );

    $wp_customize->add_control(
        'cta_text',
        array(
            'label' => __( 'Footer Call to Action Despcription', 'tfc-nathan-small' ),
            'section' => 'tfc_nathan_small_options',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting( 'cta_background' );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'cta_background',
            array(
                'label' => 'Image Upload',
                'section' => 'tfc_nathan_small_options',
            )
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

/**
 * Sanitize a text field.
 *
 * @param $input
 * @return string
 */
function tfc_nathan_small_sanitize_text( $input ) {
    return esc_attr( $input );
}