<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * Theme Includes
 */
require_once get_template_directory() .'/inc/init.php';



/**
 * TGM Plugin Activation
 */
{
	require_once  get_template_directory() . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

	add_action( 'tgmpa_register', 'kerge_register_required_plugins' );

	/** @internal */
	function kerge_register_required_plugins() {
		tgmpa( array(
			array(
				'name'      => 'Unyson',
				'slug'      => 'unyson',
				'required'  => true,
			),
			array(
				'name'               => 'Kerge Shortcodes', // The plugin name.
				'slug'               => 'kerge-shortcodes', // The plugin slug (typically the folder name).
				'source'             => get_template_directory_uri() . '/admin/plugins/kerge-shortcodes.zip', // The plugin source.
				'required'           => true,
				'version'            => '1.8.0',
			),
			array(
				'name'               => 'Kerge Portfolio', // The plugin name.
				'slug'               => 'kerge-portfolio', // The plugin slug (typically the folder name).
				'source'             => get_template_directory_uri() . '/admin/plugins/kerge-portfolio.zip', // The plugin source.
				'required'           => true,
				'version'            => '1.2.0',
			),
			array(
				'name'               => 'Kerge Share Buttons', // The plugin name.
				'slug'               => 'kerge-share-buttons', // The plugin slug (typically the folder name).
				'source'             => get_template_directory_uri() . '/admin/plugins/kerge-share-buttons.zip', // The plugin source.
				'required'           => true,
				'version'            => '1.1.0',
			),
			array(
				'name'               => 'Kerge Tracking, External CSS and JS', // The plugin name.
				'slug'               => 'kerge-tracking-and-external-css', // The plugin slug (typically the folder name).
				'source'             => get_template_directory_uri() . '/admin/plugins/kerge-tracking-and-external-css.zip', // The plugin source.
				'required'           => true,
				'version'            => '1.0.0',
			),
			array(
				'name'               => 'Kerge Contact Form', // The plugin name.
				'slug'               => 'kerge-contact-form', // The plugin slug (typically the folder name).
				'source'             => get_template_directory_uri() . '/admin/plugins/kerge-contact-form.zip', // The plugin source.
				'required'           => true,
				'version'            => '1.1.0',
			),
			array(
				'name'               => 'Envato Market', // The plugin name.
				'slug'               => 'envato-market', // The plugin slug (typically the folder name).
				'source'             => get_template_directory_uri() . '/admin/plugins/envato-market.zip', // The plugin source.
				'required'           => false,
				'version'            => '2.0.1',
			),
		) );

	}
}

/* ================================================================================================ */



/**
 * LMPixels ajax url
 */

if( ! function_exists( 'kerge_ajaxurl' ) ){
  function kerge_ajaxurl() {
  	$inline_ajax_script = 'var ajaxurl = ' . '"' . admin_url('admin-ajax.php') . '"' . ';';
  	wp_add_inline_script( 'kerge-jquery-main', $inline_ajax_script);
  }
}
add_action('wp_head','kerge_ajaxurl');

/* ================================================================================================ */



/**
 * Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 1032;
/* ================================================================================================ */

function kerge_add_post_class_to_single_post( $classes ) {
	if ( is_single() ) {
		array_push( $classes, 'single-post' );
	}
	return $classes;
}
add_filter( 'body_class', 'kerge_add_post_class_to_single_post' );


function kerge_setup_theme_supported_features() {
    $google_fonts_link = get_option('kerge_theme_google_fonts_link', '');
    $theme_style = ( function_exists('fw_get_db_settings_option') ) ? fw_get_db_settings_option('theme_style_picker') :  'light';

    add_theme_support( 'editor-styles');
    add_theme_support( 'responsive-embeds' );
    add_editor_style( 'css/style-editor.css' );
    add_editor_style( $google_fonts_link );

    if( $theme_style == 'dark' ) {
        add_theme_support( 'dark-editor-style' );
    }

    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'sunglow', 'kerge' ),
            'slug' => 'sunglow',
            'color' => '#ffcd38',
        ),
        array(
            'name' => __( 'flamingo', 'kerge' ),
            'slug' => 'flamingo',
            'color' => '#e65959',
        ),
        array(
            'name' => __( 'shamrock', 'kerge' ),
            'slug' => 'shamrock',
            'color' => '#34c7a9',
        ),
        array(
            'name' => __( 'light slate blue', 'kerge' ),
            'slug' => 'light-slate-blue',
            'color' => '#a878ff',
        ),
        array(
            'name' => __( 'hit pink', 'kerge' ),
            'slug' => 'hit-pink',
            'color' => '#f9966f',
        ),
        array(
            'name' => __( 'medium turquoise', 'kerge' ),
            'slug' => 'medium-turquoise',
            'color' => '#2fc0d1',
        ),
        array(
            'name' => __( 'cardinal', 'kerge' ),
            'slug' => 'cardinal',
            'color' => '#c7243f',
        ),
        array(
            'name' => __( 'pacific blue', 'kerge' ),
            'slug' => 'pacific-blue',
            'color' => '#0099e5',
        ),
        array(
            'name' => __( 'tangerine', 'kerge' ),
            'slug' => 'pacific-blue',
            'color' => '#f57c02',
        ),
        array(
            'name' => __( 'very light gray', 'kerge' ),
            'slug' => 'very-light-gray',
            'color' => '#f5f5f5',
        ),
        array(
            'name' => __( 'light gray', 'kerge' ),
            'slug' => 'light-gray',
            'color' => '#e5e5e5',
        ),
        array(
            'name' => __( 'dark gray', 'kerge' ),
            'slug' => 'dark-gray',
            'color' => '#555',
        ),
        array(
            'name' => __( 'very dark gray', 'kerge' ),
            'slug' => 'very-dark-gray',
            'color' => '#333',
        ),
    ) );

    add_theme_support( 'disable-custom-colors' );
    add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'kerge_setup_theme_supported_features' );

/**
 * Enqueue supplemental block editor styles.
 */

if ( function_exists( 'register_block_type' ) && is_admin() ) {
    function kerge_theme_settings_styles() {
        wp_enqueue_style( 'kerge-editor-theme-settings-styles', get_theme_file_uri( '/css/style-editor-dynamic.css' ), false, '2.2', 'all' );
        require_once get_parent_theme_file_path( '/inc/dynamic-styles.php' );
        wp_add_inline_style( 'kerge-editor-theme-settings-styles', kerge_theme_settings_css() );
    }
    add_action( 'enqueue_block_editor_assets', 'kerge_theme_settings_styles' );
}
