<!DOCTYPE html>
<html>
<head>
	<title>Tech Rant Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Main CSS -->
	<?php print css('kore.css');?>
	<?php print css('fonts.css');?>
	<?php print css('header.css');?>
	<?php print css('social.css');?>
</head>
<body class="wrapper">
<!-- Header Navigation -->
<header class="main-wrapper display-table" id="main-header">
	<section class="table-row site-title">
		<h1 class="zxx">
			<span>#</span>TECH RANT
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