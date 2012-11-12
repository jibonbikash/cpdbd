<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @since cpd 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'cpd' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" />
<![endif]-->
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon_cpd.ico">
<script type="text/javascript">var switchTo5x=false;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5ec8a081-eefe-4f63-8a5b-2ed4aff69475"}); </script>
</head>
<body>
<!--Wide Body Container Starts-->
<div id="wb_container">
	<!--Fixed Position Starts-->
	<div class="fixed_position">
		<!--Header Wrapper Starts-->
		<div id="header_wrapper">
			<div class="header_content">
				<div class="header_left">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" width="125" height="139" alt="" title="" /></a></div>
				<div class="header_right">
					<!--Header Menu Starts-->
					<div class="header_menu">
						<ul>
							<li><a href="<?php echo home_url( '/' ); ?>" class="selected">Home</a></li>
							<li class="sep">&nbsp;</li>
							<li><a href="<?php echo home_url( '/' ); ?>">About</a></li>
							<li class="sep">&nbsp;</li>
							<li><a href="<?php echo home_url( '/' ); ?>">Contact</a></li>
							<li class="sep">&nbsp;</li>
							<li><a href="<?php echo home_url( '/' ); ?>">Login</a></li>
						</ul>
					</div>
					<!--Header Menu Ends-->
					<!--Header Call Wrapper Starts-->
					<div class="header_callwrapper">
						<ul>
							<li><img src="<?php bloginfo('template_directory'); ?>/images/phone_icon.jpg" width="31" height="31" alt="" title="" /></li>
							<li>&nbsp;+88 01730444766</li>
							<li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
							<li><a href="http://www.facebook.com/CPDBangladesh" target="_blank" class="facebook" title="Facebook"></a></li>
							<li><a href="https://www.twitter.com/CPDBangladesh" target="_blank" class="twitter" title="Twitter"></a></li>
							<li><a href="http://www.linkedin.com/groups?home=&gid=4531928" target="_blank" class="linkedin" title="Linked In"></a></li>
							<!--<li><a href="#" class="flicker" title="Flicker"></a></li>-->
						</ul>
					</div>
					<!--Header Call Wrapper Ends-->
				</div>
			</div>	
		</div>
		<!--Header Wrapper Ends-->
		<!--Top Menu Wrapper Starts-->
		<div id="top_menu">
			<div class="menu">
				<ul> 
					<li><a href="#">Training</a></li>
					<li>|</li>
					<li><a href="#">E-learning</a></li>
					<li>|</li>
                    <li><a href="#">Resource Person</a></li>
					<li>|</li>
					<li><a href="#">Virtual Library</a></li>
					<li>|</li>
					<li><a href="#">Article</a></li>
					<li>|</li>
					<li><a href="#">Forum</a></li>
				</ul>
				<div class="top_searchfld_wrapper">	
	<?php get_search_form(); ?>
				</div>	
			</div>
		</div>
		
		<div id="top_menuheader">
			<div class="menuheader">
				<ul> 
					<li><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/lesslogo.png" style="padding-top:7px;" alt="logo cpd" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></li>
					<li><a href="#">Training</a></li>
					<li>|</li>
					<li><a href="#">E-learning</a></li>
					<li>|</li>
                    <li><a href="#">Resource Person</a></li>
					<li>|</li>
					<li><a href="#">Virtual Library</a></li>
					<li>|</li>
					<li><a href="#">Article</a></li>
					<li>|</li>
					<li><a href="#">Forum</a></li>
				</ul>
				<div class="top_searchfld_wrapper">	
	<?php get_search_form(); ?>
				</div>	
			</div>
		</div>	
		<!--Top Menu Wrapper Ends-->
	</div>	
	<!--Fixed Position Ends-->
	<!--Main Container Starts-->
	<div id="main_container">