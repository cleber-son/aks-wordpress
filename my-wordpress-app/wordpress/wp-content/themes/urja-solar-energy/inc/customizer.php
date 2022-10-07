<?php
/**
 * urja-solar-energy: Customizer
 *
 * @subpackage urja-solar-energy
 * @since 1.0
 */

function urja_solar_energy_customize_register( $wp_customize ) {

	$wp_customize->add_setting('urja_solar_energy_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('urja_solar_energy_logo_padding',array(
		'label' => __('Logo Padding','urja-solar-energy'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('urja_solar_energy_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
	));
	$wp_customize->add_control('urja_solar_energy_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','urja-solar-energy'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('urja_solar_energy_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
	));
	$wp_customize->add_control('urja_solar_energy_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','urja-solar-energy'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('urja_solar_energy_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
	));
	$wp_customize->add_control('urja_solar_energy_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','urja-solar-energy'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('urja_solar_energy_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
	));
	$wp_customize->add_control('urja_solar_energy_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','urja-solar-energy'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('urja_solar_energy_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_checkbox'
	));
	$wp_customize->add_control('urja_solar_energy_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','urja-solar-energy'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('urja_solar_energy_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
	));
	$wp_customize->add_control('urja_solar_energy_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','urja-solar-energy'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('urja_solar_energy_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_checkbox'
	));
	$wp_customize->add_control('urja_solar_energy_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','urja-solar-energy'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('urja_solar_energy_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
	));
	$wp_customize->add_control('urja_solar_energy_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','urja-solar-energy'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'urja_solar_energy_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'urja-solar-energy' ),
		'description' => __( 'Description of what this panel does.', 'urja-solar-energy' ),
	) );

	$wp_customize->add_section( 'urja_solar_energy_theme_options_section', array(
    	'title'      => __( 'General Settings', 'urja-solar-energy' ),
		'priority'   => 30,
		'panel' => 'urja_solar_energy_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('urja_solar_energy_theme_options',array(
      'default' => 'Right Sidebar',
      'sanitize_callback' => 'urja_solar_energy_sanitize_choices'
	));
	$wp_customize->add_control('urja_solar_energy_theme_options',array(
     	'type' => 'radio',
     	'label' => __('Do you want this section','urja-solar-energy'),
     	'section' => 'urja_solar_energy_theme_options_section',
     	'choices' => array(
         'Left Sidebar' => __('Left Sidebar','urja-solar-energy'),
         'Right Sidebar' => __('Right Sidebar','urja-solar-energy'),
         'One Column' => __('One Column','urja-solar-energy'),
         'Three Columns' => __('Three Columns','urja-solar-energy'),
         'Four Columns' => __('Four Columns','urja-solar-energy'),
         'Grid Layout' => __('Grid Layout','urja-solar-energy')
     	),
	));

	// topbar
	$wp_customize->add_section('urja_solar_energy_topbar_header',array(
		'title'	=> __('Topbar','urja-solar-energy'),
		'description'	=> __('Add Header Content here','urja-solar-energy'),
		'priority'	=> null,
		'panel' => 'urja_solar_energy_panel_id',
	));

	$wp_customize->add_setting('urja_solar_energy_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'urja_solar_energy_sanitize_checkbox'
	));
	$wp_customize->add_control('urja_solar_energy_hide_show_topbar',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Topbar','urja-solar-energy'),
   	'section' => 'urja_solar_energy_topbar_header',
	));

	$wp_customize->add_setting('urja_solar_energy_welcome',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('urja_solar_energy_welcome',array(
		'label'	=> __('Welcome Text','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_topbar_header',
		'setting'	=> 'urja_solar_energy_welcome',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('urja_solar_energy_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('urja_solar_energy_facebook_url',array(
		'label'	=> __('Add Facebook link','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_topbar_header',
		'setting'	=> 'urja_solar_energy_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('urja_solar_energy_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('urja_solar_energy_twitter_url',array(
		'label'	=> __('Add Twitter link','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_topbar_header',
		'setting'	=> 'urja_solar_energy_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('urja_solar_energy_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('urja_solar_energy_linkedin_url',array(
		'label'	=> __('Add Linkedin link','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_topbar_header',
		'setting'	=> 'urja_solar_energy_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('urja_solar_energy_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('urja_solar_energy_pinterest_url',array(
		'label'	=> __('Add Pinterest link','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_topbar_header',
		'setting'	=> 'urja_solar_energy_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('urja_solar_energy_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('urja_solar_energy_insta_url',array(
		'label'	=> __('Add Instagram link','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_topbar_header',
		'setting'	=> 'urja_solar_energy_insta_url',
		'type'	=> 'url'
	));


	// Contact Details
	$wp_customize->add_section( 'urja_solar_energy_contact_details', array(
    	'title'      => __( 'Contact Details', 'urja-solar-energy' ),
		'priority'   => null,
		'panel' => 'urja_solar_energy_panel_id'
	) );

	$wp_customize->add_setting('urja_solar_energy_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_phone_number'
	));	
	$wp_customize->add_control('urja_solar_energy_call',array(
		'label'	=> __('Contact Number','urja-solar-energy'),
		'section'=> 'urja_solar_energy_contact_details',
		'setting'=> 'urja_solar_energy_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('urja_solar_energy_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('urja_solar_energy_mail',array(
		'label'	=> __('Email Address','urja-solar-energy'),
		'section'=> 'urja_solar_energy_contact_details',
		'setting'=> 'urja_solar_energy_mail',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('urja_solar_energy_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('urja_solar_energy_address',array(
		'label'	=> __('Address','urja-solar-energy'),
		'section'=> 'urja_solar_energy_contact_details',
		'setting'=> 'urja_solar_energy_address',
		'type'=> 'text'
	));

	$wp_customize->add_setting('urja_solar_energy_timing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('urja_solar_energy_timing',array(
		'label'	=> __('Timing','urja-solar-energy'),
		'section'=> 'urja_solar_energy_contact_details',
		'setting'=> 'urja_solar_energy_timing',
		'type'=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'urja_solar_energy_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'urja-solar-energy' ),
		'priority'   => null,
		'panel' => 'urja_solar_energy_panel_id'
	) );

	$wp_customize->add_setting('urja_solar_energy_slider_hide_show',array(
		'default' => false,
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_checkbox'
	));
	$wp_customize->add_control('urja_solar_energy_slider_hide_show',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider','urja-solar-energy'),
		'section' => 'urja_solar_energy_slider_section'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'urja_solar_energy_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'urja_solar_energy_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'urja_solar_energy_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'urja-solar-energy' ),
			'section'  => 'urja_solar_energy_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//	Our Service
	$wp_customize->add_section('urja_solar_energy_service',array(
		'title'	=> __('Our Services','urja-solar-energy'),
		'description'=> __('This section will appear below the slider.','urja-solar-energy'),
		'panel' => 'urja_solar_energy_panel_id',
	));

	$wp_customize->add_setting('urja_solar_energy_our_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('urja_solar_energy_our_services_title',array(
		'label'	=> __('Section Title','urja-solar-energy'),
		'section'	=> 'urja_solar_energy_service',
		'setting'	=> 'urja_solar_energy_our_services_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('urja_solar_energy_category_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'urja_solar_energy_sanitize_choices',
	));
	$wp_customize->add_control('urja_solar_energy_category_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category to display Post','urja-solar-energy'),
		'section' => 'urja_solar_energy_service',
	));

	$wp_customize->add_setting('urja_solar_energy_service_section_padding',array(
      'default' => '',
      'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
   ));
   $wp_customize->add_control('urja_solar_energy_service_section_padding',array(
      'type' => 'number',
      'label' => __('Section Top Bottom Padding','urja-solar-energy'),
      'section' => 'urja_solar_energy_service',
   ));

	//Footer
 	$wp_customize->add_section( 'urja_solar_energy_footer', array(
    	'title'      => __( 'Footer Text', 'urja-solar-energy' ),
		'priority'   => null,
		'panel' => 'urja_solar_energy_panel_id'
	) );

	$wp_customize->add_setting('urja_solar_energy_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'urja_solar_energy_sanitize_checkbox'
	));
	$wp_customize->add_control('urja_solar_energy_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','urja-solar-energy'),
   	'section' => 'urja_solar_energy_footer'
	));

 	$wp_customize->add_setting('urja_solar_energy_footer_copy',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('urja_solar_energy_footer_copy',array(
		'label'	=> __('Footer Text','urja-solar-energy'),
		'section' => 'urja_solar_energy_footer',
		'setting' => 'urja_solar_energy_footer_copy',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('urja_solar_energy_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'urja_solar_energy_sanitize_float'
 	));
 	$wp_customize->add_control('urja_solar_energy_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','urja-solar-energy'),
		'section' => 'urja_solar_energy_footer',
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'urja_solar_energy_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'urja_solar_energy_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'urja_solar_energy_customize_register' );

function urja_solar_energy_customize_partial_blogname() {
	bloginfo( 'name' );
}

function urja_solar_energy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function urja_solar_energy_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function urja_solar_energy_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Urja_Solar_Energy_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Urja_Solar_Energy_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Urja_Solar_Energy_Customize_Section_Pro(
				$manager,
				'urja_solar_energy_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Urja Solar Energy Pro', 'urja-solar-energy' ),
					'pro_text' => esc_html__( 'Go Pro','urja-solar-energy' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/solar-energy-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'urja-solar-energy-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'urja-solar-energy-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Urja_Solar_Energy_Customize::get_instance();