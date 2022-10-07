function active_header_widgets(value) {
    if (value == 'disable') {
        wp.customize.section('sidebar-widgets-header').deactivate();
        wp.customize.section('sidebar-widgets-header-2').deactivate();
        wp.customize.section('sidebar-widgets-header-3').deactivate();
        wp.customize.section('sidebar-widgets-header-4').deactivate();
    }
    if (value == 'one') {
        wp.customize.section('sidebar-widgets-header').activate();
        wp.customize.section('sidebar-widgets-header-2').deactivate();
        wp.customize.section('sidebar-widgets-header-3').deactivate();
        wp.customize.section('sidebar-widgets-header-4').deactivate();
    }
    if (value == 'two') {
        wp.customize.section('sidebar-widgets-header').activate();
        wp.customize.section('sidebar-widgets-header-2').activate();
        wp.customize.section('sidebar-widgets-header-3').deactivate();
        wp.customize.section('sidebar-widgets-header-4').deactivate();
    }
    if (value == 'three') {
        wp.customize.section('sidebar-widgets-header').activate();
        wp.customize.section('sidebar-widgets-header-2').activate();
        wp.customize.section('sidebar-widgets-header-3').activate();
        wp.customize.section('sidebar-widgets-header-4').deactivate();
    }
    if (value == 'four') {
        wp.customize.section('sidebar-widgets-header').activate();
        wp.customize.section('sidebar-widgets-header-2').activate();
        wp.customize.section('sidebar-widgets-header-3').activate();
        wp.customize.section('sidebar-widgets-header-4').activate();
    }
}

function active_footer_widgets(value) {
    if (value == 'disable') {
        wp.customize.section('sidebar-widgets-footer').deactivate();
        wp.customize.section('sidebar-widgets-footer-2').deactivate();
        wp.customize.section('sidebar-widgets-footer-3').deactivate();
        wp.customize.section('sidebar-widgets-footer-4').deactivate();
    }
    if (value == 'one') {
        wp.customize.section('sidebar-widgets-footer').activate();
        wp.customize.section('sidebar-widgets-footer-2').deactivate();
        wp.customize.section('sidebar-widgets-footer-3').deactivate();
        wp.customize.section('sidebar-widgets-footer-4').deactivate();
    }
    if (value == 'two') {
        wp.customize.section('sidebar-widgets-footer').activate();
        wp.customize.section('sidebar-widgets-footer-2').activate();
        wp.customize.section('sidebar-widgets-footer-3').deactivate();
        wp.customize.section('sidebar-widgets-footer-4').deactivate();
    }
    if (value == 'three') {
        wp.customize.section('sidebar-widgets-footer').activate();
        wp.customize.section('sidebar-widgets-footer-2').activate();
        wp.customize.section('sidebar-widgets-footer-3').activate();
        wp.customize.section('sidebar-widgets-footer-4').deactivate();
    }
    if (value == 'four') {
        wp.customize.section('sidebar-widgets-footer').activate();
        wp.customize.section('sidebar-widgets-footer-2').activate();
        wp.customize.section('sidebar-widgets-footer-3').activate();
        wp.customize.section('sidebar-widgets-footer-4').activate();
    }
}

jQuery(function ($) {

    // Bootstrap Slider

    wp.customize('evl_bootstrap_slider_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_header_area = wp.customize.value('evl_front_elements_header_area').get();
            if (value) {
                if (!(evl_front_elements_header_area.indexOf("bootstrap_slider") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="bootstrap_slider"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_header_area.indexOf("bootstrap_slider") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="bootstrap_slider"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_header_area', function (setting) {
        setting.bind(function (value) {
            var evl_bootstrap_slider_front_page = wp.customize.value('evl_bootstrap_slider_front_page').get();
            if (value) {
                if (value.indexOf("bootstrap_slider") >= 0) {
                    if (wp.customize.value('evl_bootstrap_slider_front_page').get() != true) {
                        wp.customize.value('evl_bootstrap_slider_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_bootstrap_slider_front_page').get() != false) {
                        wp.customize.value('evl_bootstrap_slider_front_page')(false);
                    }
                }
            }
        });
    });

    wp.customize('evl_bootstrap_slider', function (setting) {
        setting.bind(function (value) {
            wp.customize.value('evl_bootstrap_slider_front_page')(value);
        });
    });

    // Parallax Slider

    wp.customize('evl_parallax_slider_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_header_area = wp.customize.value('evl_front_elements_header_area').get();
            if (value) {
                if (!(evl_front_elements_header_area.indexOf("parallax_slider") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="parallax_slider"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_header_area.indexOf("parallax_slider") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="parallax_slider"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_header_area', function (setting) {
        setting.bind(function (value) {
            var evl_parallax_slider_front_page = wp.customize.value('evl_parallax_slider_front_page').get();
            if (value) {
                if (value.indexOf("parallax_slider") >= 0) {
                    if (wp.customize.value('evl_parallax_slider_front_page').get() != true) {
                        wp.customize.value('evl_parallax_slider_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_parallax_slider_front_page').get() != false) {
                        wp.customize.value('evl_parallax_slider_front_page')(false);
                    }
                }
            }
        });
    });

    wp.customize('evl_parallax_slider', function (setting) {
        setting.bind(function (value) {
            wp.customize.value('evl_parallax_slider_front_page')(value);
        });
    });

    // Posts Slider

    wp.customize('evl_carousel_slider_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_header_area = wp.customize.value('evl_front_elements_header_area').get();
            if (value) {
                if (!(evl_front_elements_header_area.indexOf("posts_slider") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="posts_slider"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_header_area.indexOf("posts_slider") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="posts_slider"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_header_area', function (setting) {
        setting.bind(function (value) {
            var evl_carousel_slider_front_page = wp.customize.value('evl_carousel_slider_front_page').get();
            if (value) {
                if (value.indexOf("posts_slider") >= 0) {
                    if (wp.customize.value('evl_carousel_slider_front_page').get() != true) {
                        wp.customize.value('evl_carousel_slider_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_carousel_slider_front_page').get() != false) {
                        wp.customize.value('evl_carousel_slider_front_page')(false);
                    }
                }
            }
        });
    });

    wp.customize('evl_posts_slider', function (setting) {
        setting.bind(function (value) {
            wp.customize.value('evl_carousel_slider_front_page')(value);
        });
    });

    // Content Boxes

    wp.customize('evl_content_boxes_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_content_area = wp.customize.value('evl_front_elements_content_area').get();
            if (value) {
                if (!(evl_front_elements_content_area.indexOf("content_box") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="content_box"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_content_area.indexOf("content_box") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="content_box"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_content_area', function (setting) {
        setting.bind(function (value) {
            var evl_content_boxes_front_page = wp.customize.value('evl_content_boxes_front_page').get();
            if (value) {
                if (value.indexOf("content_box") >= 0) {
                    if (wp.customize.value('evl_content_boxes_front_page').get() != true) {
                        wp.customize.value('evl_content_boxes_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_content_boxes_front_page').get() != false) {
                        wp.customize.value('evl_content_boxes_front_page')(false);
                    }
                }
            }
        });
    });

    // Testimonials

    wp.customize('evl_testimonials_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_content_area = wp.customize.value('evl_front_elements_content_area').get();
            if (value) {
                if (!(evl_front_elements_content_area.indexOf("testimonial") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="testimonial"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_content_area.indexOf("testimonial") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="testimonial"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_content_area', function (setting) {
        setting.bind(function (value) {
            var evl_testimonials_front_page = wp.customize.value('evl_testimonials_front_page').get();
            if (value) {
                if (value.indexOf("testimonial") >= 0) {
                    if (wp.customize.value('evl_testimonials_front_page').get() != true) {
                        wp.customize.value('evl_testimonials_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_testimonials_front_page').get() != false) {
                        wp.customize.value('evl_testimonials_front_page')(false);
                    }
                }
            }
        });
    });

    // Counter Circles

    wp.customize('evl_counter_circle_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_content_area = wp.customize.value('evl_front_elements_content_area').get();
            if (value) {
                if (!(evl_front_elements_content_area.indexOf("counter_circle") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="counter_circle"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_content_area.indexOf("counter_circle") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="counter_circle"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_content_area', function (setting) {
        setting.bind(function (value) {
            var evl_counter_circle_front_page = wp.customize.value('evl_counter_circle_front_page').get();
            if (value) {
                if (value.indexOf("counter_circle") >= 0) {
                    if (wp.customize.value('evl_counter_circle_front_page').get() != true) {
                        wp.customize.value('evl_counter_circle_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_counter_circle_front_page').get() != false) {
                        wp.customize.value('evl_counter_circle_front_page')(false);
                    }
                }
            }
        });
    });

    // Custom Content

    wp.customize('evl_custom_content_front_page', function (setting) {
        setting.bind(function (value) {
            var evl_front_elements_content_area = wp.customize.value('evl_front_elements_content_area').get();
            if (value) {
                if (!(evl_front_elements_content_area.indexOf("custom_content") >= 0)) {
                    jQuery('li.kirki-sortable-item[data-value="custom_content"] .dashicons-visibility').trigger('click');
                }
            } else {
                if (evl_front_elements_content_area.indexOf("custom_content") >= 0) {
                    jQuery('li.kirki-sortable-item[data-value="custom_content"] .dashicons-visibility').trigger('click');
                }
            }
        });
    });

    wp.customize('evl_front_elements_content_area', function (setting) {
        setting.bind(function (value) {
            var evl_custom_content_front_page = wp.customize.value('evl_custom_content_front_page').get();
            if (value) {
                if (value.indexOf("custom_content") >= 0) {
                    if (wp.customize.value('evl_custom_content_front_page').get() != true) {
                        wp.customize.value('evl_custom_content_front_page')(true);
                    }
                }
                else {
                    if (wp.customize.value('evl_custom_content_front_page').get() != false) {
                        wp.customize.value('evl_custom_content_front_page')(false);
                    }
                }
            }
        });
    });

    wp.customize('evl_widgets_header', function (setting) {
        setting.bind(function (value) {
            console.log(value);
            active_header_widgets(value);
        });
    });
    wp.customize('evl_widgets_num', function (setting) {
        setting.bind(function (value) {
            console.log(value);
            active_footer_widgets(value);
        });
    });
    wp.customize('evl_bootstrap_slider_support', function (setting) {
        setting.bind(function (value) {
            console.log(value);
            var status = 'ACTIVE';
            if (value == false) {
                status = 'INACTIVE';
            }
            jQuery('li.kirki-sortable-item[data-value="bootstrap_slider"] span').html('Bootstrap Slider (' + status + ')');
        });
    });
    wp.customize('evl_parallax_slider_support', function (setting) {
        setting.bind(function (value) {
            console.log(value);
            var status = 'ACTIVE';
            if (value == false) {
                status = 'INACTIVE';
            }
            jQuery('li.kirki-sortable-item[data-value="parallax_slider"] span').html('Parallax Slider (' + status + ')');
        });
    });
    wp.customize('evl_carousel_slider', function (setting) {
        setting.bind(function (value) {
            console.log(value);
            var status = 'ACTIVE';
            if (value == false) {
                status = 'INACTIVE';
            }
            jQuery('li.kirki-sortable-item[data-value="posts_slider"] span').html('Posts Slider (' + status + ')');
        });
    });
});

jQuery(document).ready(function ($) {
    active_header_widgets(wp.customize.value('evl_widgets_header').get());
    active_footer_widgets(wp.customize.value('evl_widgets_num').get());
});