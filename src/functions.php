<?php 
if(!defined('psdToHtml_theme_dir')) {
	define('psdToHtml_theme_dir', get_theme_root().'/'.get_template().'/');
}	
if(!defined('psdToHtml_theme_url')) {
	define('psdToHtml_theme_url', WP_CONTENT_URL.'/themes/'.get_template().'/');
} 
add_theme_support( 'post-thumbnails' );
require_once psdToHtml_theme_dir.'libs/posttypes.php';
?>
