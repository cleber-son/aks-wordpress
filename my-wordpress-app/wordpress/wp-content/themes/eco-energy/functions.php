<?php
/**
 * Child Theme functions and definitions.
 *
 * @subpackage Eco Energy
 * @author  ThemesEye
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 */

/**
 * Theme functions and definitions.
 */
 
add_action( 'wp_enqueue_scripts', 'eco_energy_child_css',25);
function eco_energy_child_css() {
	wp_enqueue_style( 'eco-energy-parent-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'eco-energy-child-style',get_stylesheet_directory_uri() . '/css/child.css');
}

add_action( 'init', 'eco_energy_remove_my_action');
function eco_energy_remove_my_action() {
    remove_action( 'admin_notices','shams_solar_notice');
    remove_action( 'admin_menu','shams_solar_gettingstarted');
}

add_action( 'after_setup_theme', 'eco_energy_setup' );
function eco_energy_setup() {    
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support('responsive-embeds');    
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );
    add_theme_support( 'custom-background', array(
        'default-color' => 'f1f1f1'
    ) );
    add_editor_style( array( 'assets/css/editor-style.css', shams_solar_fonts_url() ) );
}

add_action( 'widgets_init', 'eco_energy_widgets_init' );
function eco_energy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'eco-energy' ),
        'id'            => 'sidebox-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'eco-energy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'eco-energy' ),
        'id'            => 'sidebox-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'eco-energy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
        'after_title'   => '</h3>',
    ) );

    //Footer widget areas
    $shams_solar_widget_areas = get_theme_mod('shams_solar_footer_widget', '4');
    for ($i=1; $i<=$shams_solar_widget_areas; $i++) {
        register_sidebar( array(
            'name'          => __( 'Footer ', 'eco-energy' ) . $i,
            'id'            => 'footer-' . $i,
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title py-2 mb-3">',
            'after_title'   => '</h3>',
        ) );
    }
}

add_action( 'customize_register', 'eco_energy_customize_register', 11 ); 
function eco_energy_customize_register() {
	global $wp_customize;
	$wp_customize->remove_section( 'shams_solar_theme_color_option' );

    $wp_customize->add_setting('eco_energy_announcment_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('eco_energy_announcment_text',array(
        'label' => __('Add Announcement','eco-energy'),
        'section'   => 'shams_solar_contact_details',
        'setting'   => 'eco_energy_announcment_text',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('eco_energy_request_btn_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('eco_energy_request_btn_text',array(
        'label' => __('Add Request Button Text','eco-energy'),
        'section'   => 'shams_solar_contact_details',
        'setting'   => 'eco_energy_request_btn_text',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('eco_energy_request_btn_link',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('eco_energy_request_btn_link',array(
        'label' => __('Add Request Button Link','eco-energy'),
        'section'   => 'shams_solar_contact_details',
        'setting'   => 'eco_energy_request_btn_link',
        'type'      => 'url'
    ));
}

if ( ! defined( 'SHAMS_SOLAR_THEME_URL' ) ) {
    define( 'SHAMS_SOLAR_THEME_URL',__('https://www.themeseye.com/wordpress/eco-energy-wordpress-theme/','eco-energy'));
}
if ( ! defined( 'SHAMS_SOLAR_THEME_NAME' ) ) {
    define( 'SHAMS_SOLAR_THEME_NAME', __('Eco Energy Pro','eco-energy') );
}

define('ECO_ENERGY_LIVE_DEMO',__('https://www.themeseye.com/demo/eco-energy-pro/','eco-energy'));
define('ECO_ENERGY_BUY_PRO',__('https://www.themeseye.com/wordpress/traveler-wordpress-theme/','eco-energy'));
define('ECO_ENERGY_FREE_DOC',__('https://themeseye.com/theme-demo/docs/free-tour-traveler/','eco-energy'));
define('ECO_ENERGY_PRO_SUPPORT',__('https://www.themeseye.com/forums/forum/themeseye-support/','eco-energy'));
define('ECO_ENERGY_FREE_SUPPORT',__('https://wordpress.org/support/theme/tour-traveler/','eco-energy'));

//footer Link
define('ECO_ENERGY_CREDIT',__('https://www.themeseye.com/wordpress/free-eco-energy-wordpress-theme/', 'eco-energy'));

if ( ! function_exists( 'eco_energy_credit' ) ) {
    function eco_energy_credit(){
        echo "<a href=".esc_url(ECO_ENERGY_CREDIT)." target='_blank'>".esc_html__(' Eco Energy WordPress Theme','eco-energy')."</a>";
    }
}

require get_theme_file_path( '/inc/dashboard/get_started_info.php' );