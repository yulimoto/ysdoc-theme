<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ysdoc
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
 <a id="myToggleButton" class="btn btn-sidebar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
</a>
 
<div id="page" class="snap-content">
	
   

	<div class="wrap">
		
		<?php do_action( 'before' ); ?>
		
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<figure class="logo-wrapper">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<figure class="logo">#</figure>
			</a>
			
		    </figure>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		
	</header><!-- #masthead --><!-- #masthead .site-header -->


