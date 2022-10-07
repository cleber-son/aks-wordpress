<?php
/**
 * The header for our theme 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>	
	<?php if(get_theme_mod('shams_solar_loader_setting', false)){ ?>
	    <div id="pre-loader">
			<div class='demo'>
				<?php $shams_solar_theme_lay = get_theme_mod( 'shams_solar_preloader_types','Default');
				if($shams_solar_theme_lay == 'Default'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($shams_solar_theme_lay == 'Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($shams_solar_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php } ?>
			</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'eco-energy' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="main-header">
				<?php if( get_theme_mod('shams_solar_show_hide_topbar', false) != '' || get_theme_mod( 'shams_solar_enable_disable_topbar', false) != ''){ ?>
					<div class="topbar text-md-start text-center">
						<div class="container">
							<div class="row">
								<div class="col-lg-7 col-md-7 align-self-center">
						            <?php if( get_theme_mod( 'eco_energy_announcment_text','' ) != '') { ?>
						                <p class="mb-0"><?php echo esc_html( get_theme_mod('eco_energy_announcment_text','') ); ?></p>
						            <?php } ?>
						        </div>
								<div class="col-lg-5 col-md-5 text-lg-end text-center pe-4 align-self-center">
									<?php if( get_theme_mod( 'shams_solar_time','' ) != '') { ?>
						                <span class="time ps-md-4"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_time_icon_changer','far fa-clock')); ?> py-3 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('shams_solar_time','') ); ?></span>
						            <?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

				<div class="middle-head py-3 text-center text-md-start">
					<div class="container">
						<div class="row">
							<div class="logo col-lg-3 col-md-12 p-lg-0 p-md-1 p-3 align-self-center text-md-center text-lg-start">
								<?php if ( has_custom_logo() ) : ?>
									<div class="site-logo"><?php the_custom_logo(); ?></div>
								<?php endif; ?>
								<?php $blog_info = get_bloginfo( 'name' ); ?>
								<?php if ( ! empty( $blog_info ) ) : ?>
									<?php if( get_theme_mod('shams_solar_show_site_title',true) != ''){ ?>
									    <?php if ( is_front_page() && is_home() ) : ?>
									    	<h1 class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
									    <?php else : ?>
									    	<p class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									    <?php endif; ?>
									<?php }?>
								<?php endif; ?>
								<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) :
								?>
									<?php if( get_theme_mod('shams_solar_show_tagline',true) != ''){ ?>
										<p class="site-description m-0">
									    <?php echo esc_html($description); ?>
										</p>
									<?php }?>
								<?php endif; ?>
							</div>
							<div class="col-lg-3 col-md-4 align-self-center">
								<?php if( get_theme_mod( 'shams_solar_email_address','' ) != '') { ?>
									<div class="row">
										<div class="col-lg-2 col-md-3 align-self-center">
											<i class="<?php echo esc_attr(get_theme_mod('shams_solar_email_icon_changer','far fa-envelope')); ?>" aria-hidden="true"></i>
										</div>
										<div class="col-lg-10 col-md-9 align-self-center">
											<p class="mb-0"><a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('shams_solar_email_address','') ); ?>"><?php echo esc_html( get_theme_mod('shams_solar_email_address','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('shams_solar_email_address','') ); ?></span></a></p>
											<p><?php esc_html_e('Email Us At','eco-energy'); ?></p>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="col-lg-3 col-md-4 align-self-center">
								<?php if( get_theme_mod( 'shams_solar_contact_number','' ) != '') { ?>
									<div class="row">
										<div class="col-lg-2 col-md-3 align-self-center">
											<i class="<?php echo esc_attr(get_theme_mod('shams_solar_phone_icon_changer','fa fa-phone')); ?>" aria-hidden="true"></i>
										</div>
										<div class="col-lg-10 col-md-9 align-self-center">
											<p class="mb-0"><a class="call" href="tel:<?php echo esc_attr( get_theme_mod('shams_solar_contact_number','' )); ?>"><?php echo esc_html( get_theme_mod('shams_solar_contact_number','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('shams_solar_contact_number','' )); ?></span></a></p>
											<p><?php esc_html_e('Call Us At','eco-energy'); ?></p>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="col-lg-1 col-md-1 align-self-center">
								<?php if( get_theme_mod('shams_solar_show_hide_search','') != ''){ ?>
									<div class="search-body text-center align-self-center">
										<button type="button" class="search-show"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_search_icon_changer','fas fa-search')); ?>"></i></button>
									</div>
								<?php } ?>
							</div>
							<div class="col-lg-2 col-md-3 align-self-center">
								<div class="social-icon text-lg-end text-center">
									<?php if( get_theme_mod( 'shams_solar_facebook_url') != '' || get_theme_mod( 'shams_solar_twitter_url') != '' || get_theme_mod( 'shams_solar_youtube_url') != '' || get_theme_mod( 'shams_solar_linkedin_url') != '' || get_theme_mod( 'shams_solar_instagram_url') != '' ) { ?>										
										<?php if( get_theme_mod( 'shams_solar_facebook_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_facebook_icon_changer','fab fa-facebook-f')); ?>" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','eco-energy' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_twitter_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_twitter_icon_changer','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','eco-energy' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_youtube_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_youtube_icon_changer','fab fa-youtube'));?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','eco-energy' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_linkedin_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_linkedin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_linkedin_icon_changer','fab fa-linkedin-in'));?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','eco-energy' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_instagram_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_instagram_icon_changer','fab fa-instagram'));?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','eco-energy' );?></span></a>
										<?php } ?>
									<?php }?>
								</div>
							</div>
						</div>
						<div class="searchform-inner">
							<?php get_search_form(); ?>
							<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
						</div>
					</div>
				</div>

				<div class="nav-head">
					<div class="container">
						<div class="<?php if( get_theme_mod( 'shams_solar_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
							<?php if ( has_nav_menu( 'top' ) ) : ?>
								<nav role="navigation" class="navigation-top">
									<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
								</nav>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		
	<div class="site-content-contain">
		<div id="content" class="pt-5">