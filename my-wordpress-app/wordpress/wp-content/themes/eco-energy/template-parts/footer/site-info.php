<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'shams_solar_hide_show_scroll',false) != '' || get_theme_mod( 'shams_solar_enable_disable_scrolltop',false) != '') { ?>
    <?php $shams_solar_theme_lay = get_theme_mod( 'shams_solar_footer_options','Right');
        if($shams_solar_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'eco-energy' ); ?></span></a>
        <?php }else if($shams_solar_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'eco-energy' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'eco-energy' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php eco_energy_credit(); ?> <?php echo esc_html(get_theme_mod('shams_solar_footer_text',__('By ThemesEye','eco-energy'))); ?></span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','eco-energy') ?></span>
</div>