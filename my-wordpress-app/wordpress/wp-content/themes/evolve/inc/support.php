<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}


if ( !class_exists( 'Evolve_Theme_Support' ) ) {

	/**
	 * Class Evolve_Theme_Support
	 * 1.0.0
	 */
	class Evolve_Theme_Support {

		/**
		 * Evolve_Theme_Support constructor.
		 * @param $data
		 */
		public function __construct( $data ) {
			$this->data = array();
			$this->data['support'] = $data['support'];
			$this->data['review'] = $data['review'];
			$this->data['slug'] = $data['slug'];
			$this->data['version'] = isset( $data['version'] ) ? $data['version'] : '1.0.0';


			add_action( 'admin_notices', array( $this, 'review_notice' ) );
			add_action( 'admin_init', array( $this, 'hide_review_notice' ) );

			add_action( 'admin_init', array( $this, 'hide_notices' ) );


			/*Admin notices*/
			if ( !get_transient( 'evolve_theme_call' ) || get_transient( 'evolve_theme_call' ) == 'evolve' ) {

				set_transient( 'evolve_theme_call', 'evolve', 86400 );
				/*Hide notices*/


			}


		}


		/**
		 * Hide notices
		 */
		public function hide_review_notice() {

			if ( !current_user_can( 'manage_options' ) ) {
				return;
			}
			if ( !isset( $_GET['_evolve_theme_nonce'] ) ) {
				return;
			}
			if ( wp_verify_nonce( $_GET['_evolve_theme_nonce'], 'evolve' . '_hide_notices' ) ) {
				set_transient( 'evolve' . $this->data['version'] . '_hide_notices', 1, 2592000 );
			}
			if ( wp_verify_nonce( $_GET['_evolve_theme_nonce'], 'evolve' . '_wp_reviewed2' ) ) {

				set_transient( $this->data['slug'] . $this->data['version'] . '_hide_notices', 1, 2592000 );
				update_option( 'evolve' . '_wp_reviewed2', 1 );
				ob_start();
				ob_end_clean();
				wp_redirect( $this->data['review'] );
				die;
			}
		}

		/**
		 * Show review
		 */
		public function review_notice() {
			if ( get_transient( 'evolve' . $this->data['version'] . '_hide_notices' )
			     || get_option( 'evolve_theme_hide_notices' )
			) {
				return;
			}

			$last_reviewed_time = get_option( 'evolve_last_reviewed_time' );

			if ( $last_reviewed_time ) {
				if ( $last_reviewed_time > time() ) {
					return;
				}

			}

			$check_review = get_option( 'evolve' . '_wp_reviewed2', 0 );
			$check_start = get_option( 'evolve' . '_start_use', 0 );
			if ( !$check_start ) {
				update_option( 'evolve' . '_start_use', 1 );
				set_transient( 'evolve' . $this->data['version'] . '_hide_notices', 1, 172800 );

				return;
			}
			if ( $check_review ) {
				return;
			}

			?>

            <div class="evolve_theme-dashboard updated" style="border-left: 4px solid #ffba00">
                <div class="evolve_theme-content">
                    <form action="" method="get">

                        <p>
							<?php esc_html_e( 'You are using our Evolve theme for a while now and we hope you love it! It you do, we would really appreciate a 5-star rating on Wordpress.org. 
								If you don\'t think our theme deserves 5 stars, please tell us why. ', 'evolve' ) ?>
                        </p>

                        <p>
							<?php if ( !$check_review ) { ?>
                                <a href="<?php echo esc_url( $this->data['support'] ); ?>"
                                   target="_blank"
                                   class="button button-primary"><?php esc_html_e( '5-star rating ', 'evolve' ) ?></a>
								<?php wp_nonce_field( 'evolve' . '_wp_reviewed2', '_evolve_theme_nonce' ) ?>
							<?php } ?>
                            <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'evolve-hide-notice', '1' ),
								'hide_notices'
								, '_evolve_theme_nonce' ) ); ?>"
                               class="button"><?php esc_html_e( 'Later', 'evolve' ) ?></a>

                            <a href="<?php echo esc_url( 'mailto:info@theme4press.com' ); ?>"
                               class="button"><?php esc_html_e( 'No? Tell us why', 'evolve' ) ?></a>

                            <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'evolve-hide-notice', '3' ), 'hide_notices', '_evolve_theme_nonce' ) ); ?>"
                               class="button"><?php esc_html_e( 'Never ask me again', 'evolve' ) ?></a>


                        </p>
                    </form>
                </div>

            </div>
		<?php }


		/**
		 * Hide notices
		 */
		public function hide_notices() {

			if ( !current_user_can( 'manage_options' ) ) {
				return;
			}

			if ( !isset( $_GET['evolve-hide-notice'] ) && !isset( $_GET['_evolve_theme_nonce'] ) ) {
				return;
			}


			if ( wp_verify_nonce( $_GET['_evolve_theme_nonce'], 'hide_notices' ) ) {
				if ( $_GET['evolve-hide-notice'] == 1 ) {
					update_option( 'evolve_last_reviewed_time', time() + ( 30 * 86400 ) );

					set_transient( 'evolve' . $this->data['version'] . '_hide_notices', 1, 86400 * 30 );
				} else {
					update_option( 'evolve_theme_hide_notices', 1 );

				}
			}
		}


	}
}
$version = wp_get_theme( 'evolve' )->get( 'Version' );
if ( !isset( $version[1] ) ) {
	$version = '4.1.4';
}
new Evolve_Theme_Support(
	array(
		'support' => 'https://wordpress.org/support/theme/evolve/reviews/?filter=5',
		'review' => '',
		'slug' => 'evolve',
		'version' => $version

	)
);