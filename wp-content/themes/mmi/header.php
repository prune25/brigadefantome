<!DOCTYPE thml>

<html <?php language_attributes();?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<title> <?php bloginfo('name');?> - <?php bloginfo('description');?></title>
		<link rel="stylesheet" type="text/CSS" href="<?php echo get_template_directory_uri();?>/css/site.css">
		<!--obligatoire-->
		<?php wp_head(); ?>
	</head>

	<header>
		<h1> <?php bloginfo('name');?> </h1>
		<h2> <?php bloginfo('description');?></h2>
		<nav id="menuprincipal">
		<div id="legendemenuprincipal">Menu Principal</div>
		<?php wp_page_menu('show_home=1')?>
		</nav>
	</header>