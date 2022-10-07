<?php

add_action( 'admin_menu', 'eco_energy_gettingstarted' );
function eco_energy_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'eco-energy'), esc_html__('About Theme', 'eco-energy'), 'edit_theme_options', 'eco-energy-guide-page', 'eco_energy_guide');   
}

function eco_energy_admin_theme_style() {
   wp_enqueue_style('eco-energy-custom-admin-style', esc_url(get_theme_file_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_theme_file_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'eco_energy_admin_theme_style');

function eco_energy_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Eco Energy Theme', 'eco-energy' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'eco-energy' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=eco-energy-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'eco-energy' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'eco_energy_notice');


/**
 * Theme Info Page
 */
function eco_energy_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'eco-energy' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Eco Energy Theme', 'eco-energy' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'eco-energy' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="eco_energy_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="eco_energy_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Eco Energy Lite Theme', 'eco-energy' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" role="img" class="logo" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'eco-energy'); ?></th>
											<th><?php esc_html_e('Click Here', 'eco-energy'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'eco-energy'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'eco-energy'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'eco-energy'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'eco-energy'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'eco-energy'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_contact_details') ); ?>" target="_blank"><?php esc_html_e('Click', 'eco-energy'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'eco-energy'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'eco-energy'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'eco-energy'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'eco-energy'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'eco-energy'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'eco-energy'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','eco-energy'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','eco-energy'); ?></a> <?php esc_html_e( 'your website.','eco-energy'); ?> </li>
								<li><?php esc_html_e( 'Eco Energy','eco-energy'); ?> <a target="_blank" href="<?php echo esc_url( ECO_ENERGY_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','eco-energy'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','eco-energy'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( ECO_ENERGY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'eco-energy'); ?></a>
							<a href="<?php echo esc_url( ECO_ENERGY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'eco-energy'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','eco-energy'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'Today there are many new technologies being implemented for bringing in new sources of energy and new devices that run on green energy. This Eco-Energy WordPress Theme is ideal for all such companies and businesses that are somehow linked to eco-friendly and green energy. Whether you have a solar panel installation or manufacturing unit or make wind energy turbines for harnessing power; you will find the design absolutely spot-on to get your online appearance. This theme has many flexible options including an intuitive theme options panel allowing easy and quick customization without much effort. Eco-Energy WordPress Theme comes with a modern page-building tool for WP that simply uses the drag and drop technique. No need to write codes at all! If you find the demo data convenient, you can import all of it using the single-click demo imported and kickstart your online business in a matter of minutes.', 'eco-energy' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','eco-energy'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','eco-energy'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Documention','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','eco-energy'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','eco-energy'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','eco-energy'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','eco-energy'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( ECO_ENERGY_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','eco-energy'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( ECO_ENERGY_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','eco-energy'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','eco-energy'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','eco-energy'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','eco-energy'); ?></a> <?php esc_html_e( 'your website.','eco-energy'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','eco-energy'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( ECO_ENERGY_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','eco-energy'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','eco-energy'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( ECO_ENERGY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'eco-energy'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>