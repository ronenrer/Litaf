<!doctype html>
<html <?php language_attributes(); ?>><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		 <!--[if !IE]><!-->
    		 <style type="text/css">@import url(https://fonts.googleapis.com/earlyaccess/opensanshebrew.css);</style>
   		 <!--<![endif]--> 
    	<!--[if (IE)|(gte IE 9)]><!--><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/ie-only.css" /><![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
		<div class="row-offcanvas row-offcanvas-right">
			<header class="header">
				<nav>
      			  <div class="container">
        			  <div class="navbar-header pull-right">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas"  aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			              <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"/></a>
			          </div>
					<?php 
						wp_nav_menu( array(
							'menu'              => 'main-nav',
							'theme_location'    => 'main-nav',
							'depth'             => 2,
							'container'         => 'div',
							'container_id'   	=>	'navbar' ,
							'container_class'   => 'sidebar-offcanvas pull-right clearfix',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?>
					</div><!--/.container-fluid -->
      			</nav>
			</header>
			<div class="page-title">
				<div class="container wide">
					<?php if (is_front_page()):?>
						<img src="<?php echo get_stylesheet_directory_uri()?>/library/images/MainPic.jpg"/>
					<div class="intro-text">
						<h1>
							<span>דוח משרד החינוך קבע:</span>
							"שיטת ליט"ף היא המקדמת ביותר את התלמידים ברכישת מיומנויות הקריאה"
						</h1>
					</div>
					<?php  else:?>
						<h1><?php the_title();?></h1>
					<?php endif;?>
				</div>  
			
			</div>			