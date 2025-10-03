<?php 
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SM Startup
 * @since 1.0.0
 */ 

function sm_startup_stylesheet() {
    wp_register_style( 'bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');
    
    // Enqueue theme's main stylesheet
    wp_enqueue_style( 'sm-startup-style', get_stylesheet_uri(), array('bootstrap'), '1.0.0' );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all' );
}

add_action( 'wp_enqueue_scripts', 'sm_startup_stylesheet' );

function sm_startup_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script('bootstrap');
}

add_action( 'wp_enqueue_scripts', 'sm_startup_scripts' );

// Register Navigation Menu
add_theme_support('menus');

function sm_startup_register_nav_menu() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'sm-startup' ),
        'mobile' => esc_html__( 'Mobile Menu', 'sm-startup' ),
    ) );
}

add_action( 'after_setup_theme', 'sm_startup_register_nav_menu' );

// Theme Customizer Options
function sm_startup_customize_register( $wp_customize ) {
    
    // Add Theme Options Panel
    $wp_customize->add_panel( 'sm_startup_theme_options', array(
        'title'    => __( 'SM Startup Theme Options', 'sm-startup' ),
        'priority' => 30,
    ) );

    // Site Layout Section
    $wp_customize->add_section( 'sm_startup_site_layout', array(
        'title'    => __( 'Site Layout', 'sm-startup' ),
        'panel'    => 'sm_startup_theme_options',
        'priority' => 10,
    ) );

    // Site Layout Settings
    $wp_customize->add_setting( 'site_margin', array(
        'default'           => '0',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'site_margin', array(
        'label'   => __( 'Site Margin', 'sm-startup' ),
        'section' => 'sm_startup_site_layout',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'site_padding', array(
        'default'           => '0',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'site_padding', array(
        'label'   => __( 'Site Padding', 'sm-startup' ),
        'section' => 'sm_startup_site_layout',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'site_font_family', array(
        'default'           => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'site_font_family', array(
        'label'   => __( 'Font Family', 'sm-startup' ),
        'section' => 'sm_startup_site_layout',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'site_text_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_text_color', array(
        'label'   => __( 'Text Color', 'sm-startup' ),
        'section' => 'sm_startup_site_layout',
    ) ) );

    $wp_customize->add_setting( 'site_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_background_color', array(
        'label'   => __( 'Background Color', 'sm-startup' ),
        'section' => 'sm_startup_site_layout',
    ) ) );

    // Header Section
    $wp_customize->add_section( 'sm_startup_header', array(
        'title'    => __( 'Header Settings', 'sm-startup' ),
        'panel'    => 'sm_startup_theme_options',
        'priority' => 20,
    ) );

    // Header Settings
    $wp_customize->add_setting( 'header_margin', array(
        'default'           => '0',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'header_margin', array(
        'label'   => __( 'Header Margin', 'sm-startup' ),
        'section' => 'sm_startup_header',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'header_padding', array(
        'default'           => '1rem',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'header_padding', array(
        'label'   => __( 'Header Padding', 'sm-startup' ),
        'section' => 'sm_startup_header',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'header_background_color', array(
        'default'           => '#0d6efd',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
        'label'   => __( 'Header Background Color', 'sm-startup' ),
        'section' => 'sm_startup_header',
    ) ) );

    $wp_customize->add_setting( 'header_text_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
        'label'   => __( 'Header Text Color', 'sm-startup' ),
        'section' => 'sm_startup_header',
    ) ) );

    // Navigation Settings
    $wp_customize->add_section( 'sm_startup_navigation', array(
        'title'    => __( 'Navigation Settings', 'sm-startup' ),
        'panel'    => 'sm_startup_theme_options',
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'nav_link_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_color', array(
        'label'   => __( 'Navigation Link Color', 'sm-startup' ),
        'section' => 'sm_startup_navigation',
    ) ) );

    $wp_customize->add_setting( 'nav_hover_color', array(
        'default'           => '#0dcaf0',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_hover_color', array(
        'label'   => __( 'Navigation Hover Color', 'sm-startup' ),
        'section' => 'sm_startup_navigation',
    ) ) );

    $wp_customize->add_setting( 'nav_active_color', array(
        'default'           => '#ffc107',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_color', array(
        'label'   => __( 'Navigation Active Color', 'sm-startup' ),
        'section' => 'sm_startup_navigation',
    ) ) );

    $wp_customize->add_setting( 'nav_font_size', array(
        'default'           => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nav_font_size', array(
        'label'   => __( 'Navigation Font Size', 'sm-startup' ),
        'section' => 'sm_startup_navigation',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'nav_font_weight', array(
        'default'           => '400',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nav_font_weight', array(
        'label'   => __( 'Navigation Font Weight', 'sm-startup' ),
        'section' => 'sm_startup_navigation',
        'type'    => 'select',
        'choices' => array(
            '300' => 'Light (300)',
            '400' => 'Normal (400)',
            '500' => 'Medium (500)',
            '600' => 'Semi Bold (600)',
            '700' => 'Bold (700)',
        ),
    ) );
}
add_action( 'customize_register', 'sm_startup_customize_register' );

// Generate Custom CSS
function sm_startup_custom_css() {
    $site_margin = get_theme_mod( 'site_margin', '0' );
    $site_padding = get_theme_mod( 'site_padding', '0' );
    $site_font_family = get_theme_mod( 'site_font_family', 'Arial, sans-serif' );
    $site_text_color = get_theme_mod( 'site_text_color', '#333333' );
    $site_background_color = get_theme_mod( 'site_background_color', '#ffffff' );
    
    $header_margin = get_theme_mod( 'header_margin', '0' );
    $header_padding = get_theme_mod( 'header_padding', '1rem' );
    $header_background_color = get_theme_mod( 'header_background_color', '#0d6efd' );
    $header_text_color = get_theme_mod( 'header_text_color', '#ffffff' );
    
    $nav_link_color = get_theme_mod( 'nav_link_color', '#ffffff' );
    $nav_hover_color = get_theme_mod( 'nav_hover_color', '#0dcaf0' );
    $nav_active_color = get_theme_mod( 'nav_active_color', '#ffc107' );
    $nav_font_size = get_theme_mod( 'nav_font_size', '16px' );
    $nav_font_weight = get_theme_mod( 'nav_font_weight', '400' );

    $custom_css = "
        /* Site Layout Styles */
        body {
            font-family: {$site_font_family};
            color: {$site_text_color};
            background-color: {$site_background_color};
            margin: {$site_margin};
            padding: {$site_padding};
        }
        
        /* Header Styles */
        .header {
            margin: {$header_margin};
            padding: {$header_padding};
            background-color: {$header_background_color} !important;
            color: {$header_text_color} !important;
        }
        
        /* Navigation Styles */
        .nav a {
            color: {$nav_link_color} !important;
            font-size: {$nav_font_size};
            font-weight: {$nav_font_weight};
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .nav a:hover {
            color: {$nav_hover_color} !important;
        }
        
        .nav .current-menu-item a,
        .nav .current_page_item a {
            color: {$nav_active_color} !important;
        }
        
        /* Additional Navigation Hover Effects */
        .nav li:hover > a {
            color: {$nav_hover_color} !important;
        }
        
        /* Pagination Styles */
        .pagination-wrapper {
            text-align: center;
        }
        
        .page-numbers {
            display: inline-block;
            padding: 0.5rem 0.75rem;
            margin: 0 0.25rem;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            color: #0d6efd;
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }
        
        .page-numbers:hover {
            background-color: #0d6efd;
            color: #ffffff;
            text-decoration: none;
        }
        
        .page-numbers.current {
            background-color: #0d6efd;
            color: #ffffff;
            border-color: #0d6efd;
        }
        
        .page-numbers.dots {
            background-color: transparent;
            border: none;
            color: #6c757d;
        }
    ";

    wp_add_inline_style( 'sm-startup-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'sm_startup_custom_css' );

// Theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

// Sidebar registration
register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => 'Sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
) );

// Register Single Bootstrap Pattern
function sm_startup_register_bootstrap_pattern() {
    if (function_exists('register_block_pattern')) {
        register_block_pattern(
            'sm-startup/sm-hero-bootstrap',
            array(
                'title'       => __('SM Hero Bootstrap', 'sm-startup'),
                'description' => __('A clean hero section using Bootstrap classes with gradient background and call-to-action buttons.', 'sm-startup'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/sm-hero-bootstrap.php'),
                'categories'  => array('featured', 'call-to-action'),
                'keywords'    => array('hero', 'bootstrap', 'gradient', 'cta', 'startup'),
            )
        );
    }

    if (function_exists('register_block_pattern')) {
        register_block_pattern(
            'sm-startup/sm-page-section',
            array(
                'title'       => __('SM Page Section', 'sm-startup'),
                'description' => __('A clean page section with a heading and image.', 'sm-startup'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/sm-page-section.php'),
                'categories'  => array('featured', 'call-to-action','about'),
                'keywords'    => array('page', 'sections', 'image', 'heading','about'),
            )
        );
    }
}
add_action('init', 'sm_startup_register_bootstrap_pattern');

