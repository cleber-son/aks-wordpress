<?php 

	$urja_solar_energy_custom_style = '';

	// Logo Size
	$urja_solar_energy_logo_top_padding = get_theme_mod('urja_solar_energy_logo_top_padding');
	$urja_solar_energy_logo_bottom_padding = get_theme_mod('urja_solar_energy_logo_bottom_padding');
	$urja_solar_energy_logo_left_padding = get_theme_mod('urja_solar_energy_logo_left_padding');
	$urja_solar_energy_logo_right_padding = get_theme_mod('urja_solar_energy_logo_right_padding');

	if( $urja_solar_energy_logo_top_padding != '' || $urja_solar_energy_logo_bottom_padding != '' || $urja_solar_energy_logo_left_padding != '' || $urja_solar_energy_logo_right_padding != ''){
		$urja_solar_energy_custom_style .=' .logo {';
			$urja_solar_energy_custom_style .=' padding-top: '.esc_attr($urja_solar_energy_logo_top_padding).'px; padding-bottom: '.esc_attr($urja_solar_energy_logo_bottom_padding).'px; padding-left: '.esc_attr($urja_solar_energy_logo_left_padding).'px; padding-right: '.esc_attr($urja_solar_energy_logo_right_padding).'px;';
		$urja_solar_energy_custom_style .=' }';
	}

	// service section padding
	$urja_solar_energy_service_section_padding = get_theme_mod('urja_solar_energy_service_section_padding');

	if( $urja_solar_energy_service_section_padding != ''){
		$urja_solar_energy_custom_style .=' #our-services {';
			$urja_solar_energy_custom_style .=' padding-top: '.esc_attr($urja_solar_energy_service_section_padding).'px; padding-bottom: '.esc_attr($urja_solar_energy_service_section_padding).'px;';
		$urja_solar_energy_custom_style .=' }';
	}

	// Site Title Font Size
	$urja_solar_energy_site_title_font_size = get_theme_mod('urja_solar_energy_site_title_font_size');
	if( $urja_solar_energy_site_title_font_size != ''){
		$urja_solar_energy_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$urja_solar_energy_custom_style .=' font-size: '.esc_attr($urja_solar_energy_site_title_font_size).'px;';
		$urja_solar_energy_custom_style .=' }';
	}

	// Site Tagline Font Size
	$urja_solar_energy_site_tagline_font_size = get_theme_mod('urja_solar_energy_site_tagline_font_size');
	if( $urja_solar_energy_site_tagline_font_size != ''){
		$urja_solar_energy_custom_style .=' .logo p.site-description {';
			$urja_solar_energy_custom_style .=' font-size: '.esc_attr($urja_solar_energy_site_tagline_font_size).'px;';
		$urja_solar_energy_custom_style .=' }';
	}

	$urja_solar_energy_slider_hide_show = get_theme_mod('urja_solar_energy_slider_hide_show',false);
	if( $urja_solar_energy_slider_hide_show == true){
		$urja_solar_energy_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$urja_solar_energy_custom_style .=' display:none;';
		$urja_solar_energy_custom_style .=' }';
	}

	// Copyright padding
	$urja_solar_energy_copyright_padding = get_theme_mod('urja_solar_energy_copyright_padding');

	if( $urja_solar_energy_copyright_padding != ''){
		$urja_solar_energy_custom_style .=' .copyright {';
			$urja_solar_energy_custom_style .=' padding-top: '.esc_attr($urja_solar_energy_copyright_padding).'px; padding-bottom: '.esc_attr($urja_solar_energy_copyright_padding).'px;';
		$urja_solar_energy_custom_style .=' }';
	}