<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

	<div class="main-container bio-landing">
		<section class="about-container">
			<div class="cont-about tint">
				<div class="wrapper">
					<div class="thoughts">
					</div>  <!-- .thoughts -->
				</div>  <!-- .wrapper -->
			</div>  <!-- .cont-about -->
		</section>  <!-- .about-container -->



		<div class="landing-error">
			<section class="wrong-page">
				<h2 class="entry-title">"Oops!  The page you are looking for is not here."</h2>
				<p>Please try refreshing the browser or navigating back to another page.</p>
				<div class="lost-icon">
					<img src="<?php echo get_template_directory_uri();?>/images/svg/error.svg" alt="icon for blog" class="icon">
				</div><!-- .lost-icon -->
			</section><!-- .wrong-page -->
		</div><!-- .landing-error -->

<?php get_footer(); ?>
