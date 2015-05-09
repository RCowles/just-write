<?php
/**
 * Just Write Theme Customizer
 *
 * @package Just Write
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function just_write_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting(
    'just_write_sidebar_color',
    array(
        'default'     => '#009393',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'   => 'postMessage'
    )
	);

	$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidebar_color',
        array(
            'label'      => __( 'Sidebar Color', 'just_write' ),
            'section'    => 'colors',
            'settings'   => 'just_write_sidebar_color'
        )
    )
	);

	$wp_customize->add_setting(
		'just_write_link_color',
		array(
				'default'     => '#009393',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'   => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
				$wp_customize,
				'link_color',
				array(
						'label'      => __( 'Link Color', 'just_write' ),
						'section'    => 'colors',
						'settings'   => 'just_write_link_color'
				)
		)
	);

}
add_action( 'customize_register', 'just_write_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function just_write_customize_preview_js() {
	wp_enqueue_script( 'just_write_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20150429', true );
}
add_action( 'customize_preview_init', 'just_write_customize_preview_js' );

/**
 * Apply colors from the Customizer
 */
function just_write_customizer_css() {
    ?>
    <style type="text/css">
			a.sidebar-toggle, #secondary { background-color: <?php echo get_theme_mod( 'just_write_sidebar_color' ); ?>; }
			#page a, #page a:active, #page a:visited { color: <?php echo get_theme_mod( 'just_write_link_color' ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'just_write_customizer_css' );
