<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Main CSS -->
	<?php print css('kore.css');?>
	<?php print css('fonts.css');?>
	<?php print css('header.css');?>
	<?php print css('social.css');?>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="57x57" href="http://techrant.beyondobjective.com/wp-content/themes/techrant/assets/img/icon57.png"/>
	<link rel="apple-touch-icon" sizes="72x72" href="http://techrant.beyondobjective.com/wp-content/themes/techrant/assets/img/icon72.png"/>
	<link rel="apple-touch-icon" sizes="144x144" href="http://techrant.beyondobjective.com/wp-content/themes/techrant/assets/img/icon144.png"/> 

	<!-- Plugin-start -->
	<?php wp_head(); ?>
	<!-- Plugin-end -->
</head>
<body class="wrapper">
<!-- Header Navigation -->
<header class="main-wrapper display-table" id="main-header">
	<section class="table-row site-title">
		<h1>
			<a class="zxx" href="<?php print get_bloginfo('url'); ?>">
			#<span>TECH</span>RANT
			</a>
		</h1>
	</section>
</header>
<!-- Main Navigation -->
<nav class="main-wrapper display-table" id="main-nav">
	<section class="table-child desktop-nav">
	<?php nav('menu_header'); ?>
	<ul>
	<li><input type="search"
			   class="search"
			   placeholder="Search"
			   /></li>
	</ul>
	</section>
	<!-- Mobile Navigation -->
	<section class="table-child mobile-nav">
	<ul>
	<li><a href="_new">Menu</a></li>
	</ul>
	</section>
</nav>