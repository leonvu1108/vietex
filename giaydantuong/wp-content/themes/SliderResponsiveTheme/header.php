<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto|Raleway' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>	
<body <?php body_class(); ?>>
 <?php $shortname = "typographic"; ?>
 
 <?php if(get_option($shortname.'_background_image_url','') != "") { ?>
<style type="text/css">
  body { background-image: url('<?php echo get_option($shortname.'_background_image_url',''); ?>'); }
</style>
<?php } ?>
 
 <section id="main_container">
 
	<header id="header">
		<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
			<div class="text_center">
				<div class="logo-header"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" alt="logo" /></a></div>
				<div class="menu-header">
					<nav id="menu_container">
					<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
					</nav><!--menu_container-->
				</div>
			</div>
		<?php } else { ?>
			<div class="text_center">
				<div class="logo-header"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" alt="logo" /></a>
				</div>
				<div class="menu-header">
					<nav id="menu_container">
					<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
					</nav><!--menu_container-->
				</div>
			</div>
		<?php } ?>		
	</header><!--//header-->