<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>


	<div class="main-container single-blog-wrap">
		<section class="about-container">
			<div class="cont-about tint">
				<div class="wrapper">
					<div class="thoughts">
						<p></p>
					</div>  <!-- .thoughts -->
				</div>  <!-- .wrapper -->
			</div>  <!-- .cont-about -->
		</section>  <!-- .about-container -->



		<div class="blog-post-container">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<div class="blog-title">
				<h2><?php the_title(); ?></h2>
				<h3>Published by James Searson on <?php the_date('F d, Y'); ?></h3>
			</div>  <!-- .blog-title -->
			<div class="single-blog-post post-styles">
				<?php the_content(); ?>
				<p class="share-blog-post"><a href="#">( Share Post )</a></p>
			</div>  <!-- .single-blog-post   .post-styles-->
			<div class="blog-post-footer">
				<span class="blog-post-meta">
					<span>Tags: </span>
					<a href="#" rel="tag"><?php the_tags('', ', ', ''); ?></a>
				</span>
			</div>
		</div>  <!-- .blog-post-container -->

			<!-- If comments are open or we have at least one comment, load up the comment template. -->
			<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
			?>

		<?php endwhile; endif; ?>



<?php get_footer(); ?>
