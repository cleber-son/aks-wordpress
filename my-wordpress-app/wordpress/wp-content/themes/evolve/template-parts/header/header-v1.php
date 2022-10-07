<header class="header-v1 header-wrapper" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <div class="header-pattern">

		<?php if ( get_header_image() ) {
			echo '<div class="custom-header">';
		} ?>

        <div class="header container">
            <div class="row align-items-center justify-content-between">

				<?php

				if ( is_active_sidebar( 'top-header' ) ) {
					if ( evolve_theme_mod( 'evl_tagline_pos', 'next' ) == "next" ) {
						echo '<div class="col-lg-auto ml-auto order-1 order-md-3">';
					} else {
						echo '<div class="col-lg-auto ml-auto order-1 order-md-2">';
					}
					dynamic_sidebar( 'top-header' );
					echo '</div>';
				}

				if ( evolve_theme_mod( 'evl_tagline_pos', 'next' ) == "next" ) {
					$evolve_social_woo_class = 'col-12 col-md order-1 order-md-3';
				} else {
					$evolve_social_woo_class = 'col-12 col-md order-1 order-md-2';
				}

				if ( evolve_theme_mod( 'evl_header_logo', '' ) && evolve_logo_position() !== 'disable' ) {
					if ( evolve_logo_position() == "center" ) {
						$evolve_social_woo_class = 'col-12 order-1';
					}
					if ( evolve_logo_position() == "left" ) {
						$evolve_social_woo_class = 'col order-1 order-md-3';
					}
					if ( evolve_logo_position() == "right" ) {
						$evolve_social_woo_class = 'col-12 order-1';
					}
				}

                echo '<div class="' . $evolve_social_woo_class . '">';
                if ( evolve_theme_mod( 'evl_social_links', 0 ) != '1') {
                } else {
                    if ( evolve_theme_mod( 'evl_social_links', 0 ) ) {
                        evolve_social_media_links();
                    }
                }
                if(!( ( evolve_theme_mod( 'evl_woocommerce_acc_link_main_nav', 0 ) == "0"
                        && evolve_theme_mod( 'evl_woocommerce_cart_link_main_nav', 0 ) == "0"
                        && ( isset($evolve_woocommerce_acc_link_main_nav) && $evolve_woocommerce_acc_link_main_nav == 'hide'
                             && $evolve_woocommerce_cart_link_main_nav == 'hide'
                             || (
                                     !isset($evolve_woocommerce_acc_link_main_nav) || !
                                                                                      $evolve_woocommerce_acc_link_main_nav &&
                                  ! $evolve_woocommerce_cart_link_main_nav ) ) )
                      || ( isset($evolve_woocommerce_acc_link_main_nav)  && $evolve_woocommerce_acc_link_main_nav == 'hide' &&
                           $evolve_woocommerce_cart_link_main_nav == 'hide' ))){
                    if ( class_exists( 'Woocommerce' ) ) {
                        evolve_woocommerce_menu();
                    }
                }
                echo '</div>';
                if ( evolve_logo_position() != "disable" ) {
                    evolve_header_logo();
                }

                get_template_part( 'template-parts/header/header', 'tagline-above' );

                if ( evolve_theme_mod( 'evl_blog_title', '0' ) != "1" ) {
                    get_template_part( 'template-parts/header/header', 'website-title' );
                }

                get_template_part( 'template-parts/header/header', 'tagline-next-under' ); ?>

            </div><!-- .row .align-items-center -->
        </div><!-- .header .container -->

		<?php if ( get_header_image() ) {
			echo '</div><!-- .custom-header -->';
		} ?>

    </div><!-- .header-pattern -->

    <div class="menu-header">
        <div class="container">
            <div class="row align-items-md-center">

				<?php if ( evolve_theme_mod( 'evl_main_menu', false ) !== true ) {
					echo evolve_menu( 'primary-menu', 'navbar-nav mr-auto' );
				}

				if ( evolve_theme_mod( 'evl_searchbox', true ) ) {
					evolve_header_search( '1' );
				} ?>

            </div><!-- .row .align-items-center -->
        </div><!-- .container -->
    </div><!-- .menu-header -->
</header><!-- .header-v1 -->