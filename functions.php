<?php
$function_paths = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/techrant/';

include ($function_paths.'app/helper.php');

/******************************
 * Navitation Menu Initiation
 * ****************************/

function reg_menu()
{
	register_nav_menu('menu_header','Header');
	register_nav_menu('menu_affiliate','Affiliate');
	register_nav_menu('menu_rp','Radyo Pirata');	
}
add_action('init','reg_menu');

/******************************
 * wp_query lists
 * ****************************/



/******************************
 * Thumbnail Initiation
 ******************************/

add_theme_support('post-thumbnails');
?>