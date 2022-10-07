<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu">
	<div class="row">
		<div class="col-lg-9 col-md-9 align-self-center">
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'eco-energy' ); ?>">
				<button role="tab" class="menu-toggle p-3" aria-controls="top-menu" aria-expanded="false">
					<?php
						esc_html_e( 'Menu', 'eco-energy' );
					?>
				</button>
				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
				) ); ?>
			</nav>
		</div>
		<div class="col-lg-3 col-md-3 align-self-center">
			<?php if( get_theme_mod( 'eco_energy_request_btn_text','' ) != '' || get_theme_mod( 'eco_energy_request_btn_link','' ) != '') { ?>
				<div class="text-end request-btn text-center text-md-end my-4 my-md-0">
					<a href="<?php echo esc_url( get_theme_mod('eco_energy_request_btn_link','') ); ?>"><?php echo esc_html( get_theme_mod('eco_energy_request_btn_text','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('eco_energy_request_btn_text','') ); ?></span><i class="fas fa-arrow-right ms-2"></i></a>
				</div>
			<?php }?>
		</div>
	</div>
</div>