<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nulis
 *
 * Amended by DFL  $Id: header.php,v 1.6 2016/07/26 15:22:44 u36656361 Exp u36656361 $
 *
 * $Log: header.php,v $
 * Revision 1.6  2016/07/26 15:22:44  u36656361
 * Installed duplicate foaf LINK
 *
 * Revision 1.5  2016/07/26 15:16:40  u36656361
 * inserted FOAF file link
 *
 * Revision 1.4  2015/03/03 14:32:29  u36656361
 * Added a signin button
 *
 * Revision 1.3  2015/02/28 23:34:03  u36656361
 * A-Z button added
 *
 * Revision 1.2  2015/02/28 16:25:26  u36656361
 * New toolbar items, home & rss
 *
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<LINK REL="meta" TYPE="application/rdf+xml" TITLE="FOAF" HREF="http://davelevy.info/foaf.me">
<LINK REL="meta" TYPE="application/rdf+xml" TITLE="FOAF" HREF="http://davelevy.info/foaf.rdf">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'nulis' ); ?></a>

	<div class="toolbar">
		<ul class="sidebar-toggle clear">
			<li class="menu-icon-wrapper" title="Menus"><a id="menu-icon" aria-controls="menu" aria-expanded="false" href="#" class="iconized m-icon"><span class="screen-reader-text"><?php _e( 'Menu', 'nulis' ); ?></span></a></li>
			<li class="arrow-icon-wrapper" title="1st Article"><a id="arrow-icon" aria-controls="menu" aria-expanded="false" href="#" class="iconized a-icon"><span class="screen-reader-text"><?php _e( 'Menu', 'nulis' ); ?></span></a></li>
			<li class="rss-icon-wrapper" title="Feed"><a id="rss-icon" aria-controls="menu" aria-expanded="false" href="http://davelevy.info/wiki/feed/" class="iconized r-icon"><span class="screen-reader-text"><?php _e( 'rss', 'nulis' ); ?></span></a></li>
			<li class="az-icon-wrapper" title="A-Z Index"><a id="az-icon" aria-controls="menu" aria-expanded="false" href="http://davelevy.info/wiki/a-z-index/" class="iconized i-icon"><span class="screen-reader-text"><?php _e( 'rss', 'nulis' ); ?></span></a></li>
			<li class="qu-icon-wrapper" title="Sign In"><a id="qu-icon" aria-controls="menu" aria-expanded="false" href="https://davelevy.info/wiki/wp-login" class="iconized q-icon"><span class="screen-reader-text"><?php _e( 'rss', 'nulis' ); ?></span></a></li>
			<li  class="search-icon-wrapper" title="Search"><a id="search-icon" aria-controls="search" aria-expanded="false" href="#" class="iconized s-icon"><span class="screen-reader-text"><?php _e( 'Search', 'nulis' ); ?></span></a></li>
		</ul><!-- .sidebar-toggle -->	
	</div><!-- .toolbar -->		

	<section id="top-panel" class="site-panel">
		<div class="search-box clear toggle">
			<?php get_search_form();?>
		</div><!-- .search-box -->

		<div class="widget-box toggle">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="main-navigation clear" role="navigation">			
				<?php 
				wp_nav_menu( array( 
					'theme_location'  => 'primary',
					'container_class' => 'primary-nav clear',
					'menu_id'         => 'navbar',
					'menu_class'	  => 'nav-menu'
				    ) );
			    ?>
			</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php get_sidebar(); ?>
		</div><!-- .widget-box -->
	</section><!-- #top-panel -->

	<header id="masthead" class="site-header" role="banner">
		<div class="inner-header">
			<div class="site-branding">
				<?php
				$logo_image = get_theme_mod('nulis_logo_image');
				$use_gravatar = get_theme_mod('nulis_use_gravatar'); ?>
				<a class="user-avatar circle" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if ( $use_gravatar ) :?>
						<img class="nulis-avatar circle gravatar" src="<?php echo nulis_gravatar_logo(); ?>"/>
					<?php elseif ( $logo_image ) : ?>
						<img class="nulis-avatar circle" src="<?php echo $logo_image ?>"/>
					<?php else: ?>
						<figure class="nulis-avatar default-logo circle"/></figure>
					<?php endif; ?>
				</a><!-- .user-avatar -->

				<hgroup class="blog-name">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup><!-- .blog-name -->
			</div><!-- .site-branding -->

			<?php get_template_part('socials');?>
		</div><!-- .inner-header -->
	</header><!-- #masthead -->
<a name="top_of_content"></a>
	<div id="content" class="site-content">
	
