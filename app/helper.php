<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function css($path)
{
	$path = get_bloginfo('stylesheet_directory')."/assets/css/$path";
	return "<link rel='stylesheet' href='$path'/>";
}

function img($path)
{
	$path = get_bloginfo('stylesheet_directory')."/assets/img/$path";
	return "<img src='$path'/>";
}

function nav($theme)
{
	$args = array(
		'theme_location'  => $theme,
		'container'       => false,
		'echo'            => true,
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu($args);
}

function add_script_code() 
{
		wp_deregister_script('jquery');	
		wp_enqueue_script(
		'jquery',
		get_bloginfo('stylesheet_directory').'/assets/js/jquery.core.js',
		'1.10.2',
		true);
		wp_enqueue_script(
		'jw_player',
		'http://jwpsrv.com/library/HGJ94haoEeO67CIACusDuQ.js',
		'1.0.0',
		true);
}
add_action('wp_enqueue_scripts', 'add_script_code');
?>