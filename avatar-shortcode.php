<?php
/**
 * Avatar Shortcode Plugin
 *
 * @package   Avatar Shortcode
 * @author    Bryan Willis <bryanwillis1@gmail.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.stackexchange.com/questions/157044
 *
 * @wordpress-plugin
 * Plugin Name:       Avatar Shortcode
 * Plugin Script:     avatar-shortcode.php
 * Plugin URI:        http://wordpress.org/plugins/avatar-shortcode/
 * Description:       Allows you to use avatars/gravatars or profile pictures as shortcodes the same way you would in templates
 * Version:           0.2
 * Author:            Bryan Willis
 * Author URI:        http://profiles.wordpress.org/codecandid
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/Wordpress-Development/avatar-shortcode/
 */
 
if ( function_exists( 'get_avatar' ) ) {
function brw_get_avatar_shortcode ( $attributes ) {
	$current_user = wp_get_current_user();
        
	extract(shortcode_atts(array(
		'id' => $current_user->ID,
		'size' => 32,
		'default' => 'mystery',
		'alt' => '',
                'class' => '',
                'rating' => '',
                'extra_attr' => '',
                'width' => '',
                'height' => '',
                'force_display' => ''
	), $attributes, 'get_avatar' ));
  
	$args = array( 
                'class' => $class,
                'rating' => $rating,
                'extra_attr' => $extra_attr,
                'width' => $width,
                'height' => $height,
                'force_display' => $force_display  
        );    
	return get_avatar( $id, $size, $default, $alt, $args );
}
    add_shortcode ('get_avatar', 'brw_get_avatar_shortcode');
}
?>
