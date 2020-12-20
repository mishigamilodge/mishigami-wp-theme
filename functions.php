<?php
/**
 * Avant functions and definitions
 *
 * @package Avant
 */

function mishigami_theme_init() {
    $options = array();

    $section = 'avant-social-section';

    $options['avant-social-instagram'] = array(
        'id' => 'avant-social-instagram',
        'label'   => __( 'Instagram', 'avant' ),
        'section' => $section,
        'type'    => 'text',
    );

    $customizer_library = Customizer_Library::Instance();
    $customizer_library->add_options( $options );
}
add_action( 'init', 'mishigami_theme_init' );

