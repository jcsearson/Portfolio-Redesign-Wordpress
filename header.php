<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Favicons -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>

	<?php
	$template_dir = get_template_directory_uri();
	?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-57x57.png?v=2">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-60x60.png?v=2">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-72x72.png?v=2">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-76x76.png?v=2">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-114x114.png?v=2">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-120x120.png?v=2">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-144x144.png?v=2">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-152x152.png?v=2">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $template_dir; ?>/favicons/apple-touch-icon-180x180.png?v=2">
	<link rel="icon" type="image/png" href="<?php echo $template_dir; ?>/favicons/favicon-32x32.png?v=2" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo $template_dir; ?>/favicons/android-chrome-192x192.png?v=2" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo $template_dir; ?>/favicons/favicon-96x96.png?v=2" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo $template_dir; ?>/favicons/favicon-16x16.png?v=2" sizes="16x16">
	<link rel="manifest" href="<?php echo $template_dir; ?>/favicons/manifest.json?v=2">
	<meta name="msapplication-TileColor" content="#292b33">
	<meta name="msapplication-TileImage" content="<?php echo $template_dir; ?>/favicons/mstile-144x144.png?v=2">
	<meta name="theme-color" content="#ffffff">
	<?php unset($template_dir); ?>

	<?php wp_head(); ?>  <!-- e.g. jQuery -->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?<?php echo filemtime(TEMPLATEPATH . '/style.css'); ?>" type="text/css" />
</head>

<?php flush(); ?>
<body <?php body_class(); ?>>


	<div class="head-container">
		<a id="top-page-jump"></a>
		<div class="head-wrap">
			<header class="wrapper">
				<a href="/home">James C. Searson</a>
			</header>  <!-- .wrapper -->

			<?php if ( is_front_page() || is_page_template( 'contact-send.php' )): ?>  <!-- Show menu only on home page (NOT NECCESSARY for BLOG) -->
			<nav class="menu">
				<ul class="nav-list active">
					<li class="contact-container">
						<a href="#contact-me-jump">Contact</a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
					<li class="contact-container">
						<a href="#blog-jump">Blog</a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
					<li class="contact-container">
						<a href="#portfolio-jump">Portfolio</a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
					<li class="contact-container">
						<a href="#about-me-jump">About</a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
				</ul>  <!-- .nav-list  //  .active -->
			</nav>  <!-- .menu -->
			<?php endif; ?>
		</div>  <!-- .head-wrap -->
	</div>  <!-- .head-container -->