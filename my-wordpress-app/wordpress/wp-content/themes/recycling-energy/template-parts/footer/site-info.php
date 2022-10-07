<?php
/**
 * Displays footer site info
 *
 * @subpackage Recycling Energy
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">
    <?php
        echo esc_html( get_theme_mod( 'recycling_energy_footer_text' ) );
        printf(
            /* translators: %s: Recycling WordPress Theme. */
            esc_html__( ' %s ', 'recycling-energy' ),
            '<a target="_blank" href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-recycling-wordpress-theme/', 'recycling-energy' ) . '"> Recycling WordPress Theme</a>'
        );
    ?>
</div>
