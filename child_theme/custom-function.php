<?php
// Them css va javascript vao giua the head
function sw_styles_and_scripts() {
        wp_register_style('html5blank-custom-style', get_template_directory_uri().'/child_theme/custom-style.css');
        wp_enqueue_style('html5blank-custom-style');
}
add_action('wp_enqueue_scripts', 'sw_styles_and_scripts');
// Them vao cac chuc nang ho tro cua giao dien
if (function_exists('add_theme_support'))
{
        // Khai bao kich thuoc cho hinh anh thumbnail khi xem bai viet
        add_image_size('custom-single-size', 300, 175, true);
 
        // Khai bao kich thuoc cho hinh anh thumbnail khi duyet danh sach bai viet
        add_image_size('custom-home-size', 1004, 477, true);
}
class STheme_Customize {
        public static function register ( $wp_customize ) {
                $wp_customize->add_section( 'stheme_options_section', array(
                        'title' => __( 'Cài đặt giao diện', 'html5blank' ),
                        'priority' => 35,
                        'capability' => 'edit_theme_options',
                        'description' => __('Cài đặt tùy chọn cho giao diện.', 'html5blank'),
                        )
                );
                $wp_customize->add_setting( 'stheme_options[logo_url]', array(
                        'default' => '',
                        'type' => 'option',
                        'capability' => 'edit_theme_options',
                        'transport' => 'postMessage',
                        )
                );
                $wp_customize->add_control( 'stheme_logo_url', array(
                        'label' => __( 'Logo Url', 'html5blank' ),
                        'section' => 'stheme_options_section',
                        'settings' => 'stheme_options[logo_url]',
                        'priority' => 10,
                        )
                );
 
                $wp_customize->add_setting( 'stheme_options[banner_url]', array(
                        'default' => '',
                        'type' => 'option',
                        'capability' => 'edit_theme_options',
                        'transport' => 'postMessage',
                        )
                );
                $wp_customize->add_control( 'stheme_banner_url', array(
                        'label' => __( 'Banner Url', 'html5blank' ),
                        'section' => 'stheme_options_section',
                        'settings' => 'stheme_options[banner_url]',
                        'priority' => 10,
                        )
                );
 
                $wp_customize->get_setting( 'stheme_options[logo_url]' )->transport = 'postMessage';
                $wp_customize->get_setting( 'stheme_options[banner_url]' )->transport = 'postMessage';
        }
}
add_action( 'customize_register' , array( 'STheme_Customize' , 'register' ) );
?>