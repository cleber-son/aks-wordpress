<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/pagination.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
	return;
}
?>
<nav aria-label="<?php _e( "Pages", "evolve" ); ?>" class="navigation">
	<?php
	$page_list = paginate_links( apply_filters( 'woocommerce_pagination_args', array( // WPCS: XSS ok.
		'base'      => $base,
		'format'    => $format,
		'current'   => max( 1, $current ),
		'total'     => $total,
		'type'      => 'array',
		'end_size'  => 3,
		'mid_size'  => 1,
		'prev_next' => true,
		'prev_text' => sprintf( __( 'Previous', 'evolve' ) ),
		'next_text' => sprintf( __( 'Next', 'evolve' ) ),
		'add_args'  => false,
	) ) );

	if ( is_array( $page_list ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<ul class="pagination justify-content-center">';
		foreach ( $page_list as $individual_page ) {
			$pagination .= '<li class="page-item"> ' . str_replace( 'page-numbers', 'page-link', $individual_page ) . '</li>';
		}
		$pagination .= '</ul>';

		echo $pagination;

	}
	?>
</nav>

<?php //evolve_number_pagination(); ?>