<?php

add_action( 'admin_menu', 'recycling_energy_gettingstarted' );
function recycling_energy_gettingstarted() {    	
	add_theme_page( esc_html__('Theme Documentation', 'recycling-energy'), esc_html__('Theme Documentation', 'recycling-energy'), 'edit_theme_options', 'recycling-energy-guide-page', 'recycling_energy_guide');   
}

function recycling_energy_admin_theme_style() {
   wp_enqueue_style('recycling-energy-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'recycling_energy_admin_theme_style');

if ( ! defined( 'RECYCLING_ENERGY_SUPPORT' ) ) {
	define('RECYCLING_ENERGY_SUPPORT',__('https://wordpress.org/support/theme/recycling-energy/','recycling-energy'));
}
if ( ! defined( 'RECYCLING_ENERGY_REVIEW' ) ) {
	define('RECYCLING_ENERGY_REVIEW',__('https://wordpress.org/support/theme/recycling-energy/reviews/','recycling-energy'));
}
if ( ! defined( 'RECYCLING_ENERGY_LIVE_DEMO' ) ) {
define('RECYCLING_ENERGY_LIVE_DEMO',__('https://www.ovationthemes.com/demos/recycling-energy/','recycling-energy'));
}
if ( ! defined( 'RECYCLING_ENERGY_BUY_PRO' ) ) {
define('RECYCLING_ENERGY_BUY_PRO',__('https://www.ovationthemes.com/wordpress/recycling-energy-wordpress-theme/','recycling-energy'));
}
if ( ! defined( 'RECYCLING_ENERGY_PRO_DOC' ) ) {
define('RECYCLING_ENERGY_PRO_DOC',__('https://ovationthemes.com/docs/ot-recycling-energy-pro-doc/','recycling-energy'));
}
if ( ! defined( 'RECYCLING_ENERGY_THEME_NAME' ) ) {
define('RECYCLING_ENERGY_THEME_NAME',__('Premium Recycling Theme','recycling-energy'));
}

function recycling_energy_enqueue_admin_script( $hook ) {
	
// Admin JS
wp_enqueue_script( 'recycling-energy-admin.js', get_theme_file_uri( '/assets/js/recycling-energy-admin.js' ), array( 'jquery' ), true );

wp_localize_script('recycling-energy-admin.js', 'recycling_energy_scripts_localize',
     array(
         'ajax_url' => esc_url(admin_url('admin-ajax.php'))
     )
 );
}
add_action( 'admin_enqueue_scripts', 'recycling_energy_enqueue_admin_script' );

/**
 * Theme Info Page
 */
function recycling_energy_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme(); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'recycling-energy'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( RECYCLING_ENERGY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'recycling-energy'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( RECYCLING_ENERGY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'recycling-energy'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','recycling-energy'); ?></h3>
					<p><?php esc_html_e('To step the recycling energy theme follow the below steps.','recycling-energy'); ?></p>

					<h4><?php esc_html_e('1. Setup Logo','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Site Identity >> Upload your logo or Add site title and site description.','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','recycling-energy'); ?></a>

					<h4><?php esc_html_e('2. Setup Top Header','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Top Header >> Add your text and button details.','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=recycling_energy_top') ); ?>" target="_blank"><?php esc_html_e('Add Top Header','recycling-energy'); ?></a>

					<h4><?php esc_html_e('3. Setup Header','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Header >> Add your header details.','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=recycling_energy_header') ); ?>" target="_blank"><?php esc_html_e('Add Header','recycling-energy'); ?></a>

					<h4><?php esc_html_e('4. Setup Menus','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Menus >> Create Menus >> Add pages, post or custom link then save it.','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Add Menus','recycling-energy'); ?></a>

					<h4><?php esc_html_e('5. Setup Social Icons','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Social Media >> Add social links.','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=recycling_energy_urls') ); ?>" target="_blank"><?php esc_html_e('Add Social Icons','recycling-energy'); ?></a>

					<h4><?php esc_html_e('6. Setup Footer','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Widgets >> Add widgets in footer 1, footer 2, footer 3, footer 4. >> ','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','recycling-energy'); ?></a>

					<h4><?php esc_html_e('7. Setup Footer Text','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Footer Text >> Add copyright text. >> ','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=recycling_energy_footer_copyright') ); ?>" target="_blank"><?php esc_html_e('Footer Text','recycling-energy'); ?></a>

					<h3><?php esc_html_e('Setup Home Page','recycling-energy'); ?></h3>
					<p><?php esc_html_e('To step the home page follow the below steps.','recycling-energy'); ?></p>

					<h4><?php esc_html_e('1. Setup Page','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Pages >> Add New Page >> Select "Custom Home Page" from templates >> Publish it.','recycling-energy'); ?></p>
					<a class="dashboard_add_new_page button-primary"><?php esc_html_e('Add New Page','recycling-energy'); ?></a>

					<h4><?php esc_html_e('2. Setup Slider','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','recycling-energy'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Slider Settings >> Select post.','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=recycling_energy_slider_section') ); ?>" target="_blank"><?php esc_html_e('Add Slider','recycling-energy'); ?></a>

					<h4><?php esc_html_e('3. Setup Mission','recycling-energy'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','recycling-energy'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Mission Section Settings >> Select post','recycling-energy'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=recycling_energy_mission_section') ); ?>" target="_blank"><?php esc_html_e('Add Mission','recycling-energy'); ?></a>

				</div>
          	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html( RECYCLING_ENERGY_THEME_NAME ); ?></h3>
				<img class="recycling_energy_img_responsive" style="width: 100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div class="pro-links">
					<hr>
					<a class="button-primary buynow" href="<?php echo esc_url( RECYCLING_ENERGY_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'recycling-energy'); ?></a>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( RECYCLING_ENERGY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'recycling-energy'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( RECYCLING_ENERGY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'recycling-energy'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'recycling-energy');?> </li>
                    <li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'recycling-energy');?> </li>
                   	<li class="upsell-recycling_energy"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'recycling-energy');?> </li>                    
                </ul>
        	</div>
		</div>
	</div>

<?php }?>
