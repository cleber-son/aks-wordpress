<header class="header-v2 header-wrapper" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <div class="top-bar py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
					<?php if ( evolve_theme_mod( 'evl_social_links', 0 ) ) {
						evolve_social_media_links();
					}

					if ( is_active_sidebar( 'top-left' ) ) {
						dynamic_sidebar( 'top-left' );
					} ?>
                </div>
                <div class="col-md-6 col-sm-12">
					<?php if ( is_active_sidebar( 'top-right' ) ) {
						dynamic_sidebar( 'top-right' );
					}

					if ( class_exists( 'Woocommerce' ) ) {
						evolve_woocommerce_menu();
					} ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-pattern">

		<?php if ( get_header_image() ) {
			echo '<div class="custom-header">';
		} ?>

        <div class="header container">
            <div class="row align-items-md-center">

				<?php if ( '' != evolve_theme_mod( 'evl_header_logo', '' ) && evolve_logo_position() != "disable" && ( '' == evolve_theme_mod( 'evl_blog_title', '0' ) || evolve_theme_mod( 'evl_tagline_pos', 'next' ) !== 'disable' ) ) { ?>
                <div class="col">
                    <div class="row align-items-center">
						<?php } ?>

						<?php if ( evolve_logo_position() != "disable" ) {
							evolve_header_logo();
						}

						get_template_part( 'template-parts/header/header', 'tagline-above' );

						if ( evolve_theme_mod( 'evl_blog_title', '0' ) != "1" ) {
							get_template_part( 'template-parts/header/header', 'website-title' );
						}

						get_template_part( 'template-parts/header/header', 'tagline-next-under' ); ?>

						<?php if ( '' != evolve_theme_mod( 'evl_header_logo', '' ) && evolve_logo_position() != "disable" && ( '' == evolve_theme_mod( 'evl_blog_title', '0' ) || evolve_theme_mod( 'evl_tagline_pos', 'next' ) !== 'disable' ) ) { ?>
                    </div><!-- .row .align-items-center -->
                </div><!-- .col -->
			<?php }

			if ( evolve_theme_mod( 'evl_main_menu', false ) !== true ) {
				echo evolve_menu( 'primary-menu', 'navbar-nav mr-auto' );
			}

			if ( evolve_theme_mod( 'evl_searchbox', true ) ) {
				evolve_header_search( '2' );
			} ?>

            </div><!-- .row .align-items-center -->
        </div><!-- .header .container -->

		<?php if ( get_header_image() ) {
			echo '</div><!-- .custom-header -->';
		} ?>

    </div><!-- .header-pattern -->
</header><!-- .header-v2 -->