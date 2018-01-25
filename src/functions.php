<?php 
//{
//define('psdToHtml_theme_dir', get_theme_root().'\'.get_template().'\' ');
//}
//define()
if(!defined('psdToHtml_theme_dir')) {
	define('psdToHtml_theme_dir', get_theme_root().'/'.get_template().'/');
}	
if(!defined('psdToHtml_theme_url')) {
	define('psdToHtml_theme_url', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

?>
