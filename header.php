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
	<?php wp_head(); ?>  <!-- e.g. jQuery -->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?<?php echo filemtime(TEMPLATEPATH . '/style.css'); ?>" type="text/css" />
</head>
<?php flush(); ?>

<body <?php body_class(); ?>>


	<div class="head-container">
		<a id="jump-up"></a>
		<div class="head-wrap">
			<header class="wrapper">
				<a href="/index.php">James C. Searson</a>
			</header>  <!-- .wrapper -->

			<nav class="menu">
				<ul class="nav-list active">
					<li class="contact-container">
						<a href="#contact-me-jump">< Contact ></a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
					<li class="contact-container">
						<a href="#blog-jump">< Blog ></a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
					<li class="contact-container">
						<a href="#portfolio-jump">< Portfolio ></a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
					<li class="contact-container">
						<a href="#about-me-jump">< About ></a>
						<div class="triangle-marker"></div>
					</li>  <!-- .contact-container -->
				</ul>  <!-- .nav-list  //  .active -->
			</nav>  <!-- .menu -->
		</div>  <!-- .head-wrap -->
	</div>  <!-- .head-container -->