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
				<h2 class="blog-post-heading"><?php the_title(); ?></h2>
				<h3 class="blog-post-date">Published by James Searson on <?php the_date('F d, Y'); ?></h3>
				<!-- Access the thumbnail/feature image URL -->
				<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$thumb_url = $thumb_url_array[0];
				?>
				<!-- Call the thumb URL variable using the echo funtion in order to provide the URL in the img source -->
				<img src="<?php echo $thumb_url ?>" alt="Post Featured Image" class="post-featured-image">
			</div>  <!-- .blog-title -->
			<div class="single-blog-post post-styles">
				<?php the_content(); ?>
			</div>  <!-- .single-blog-post   .post-styles-->
			<div class="blog-post-footer">
				<span class="blog-post-meta">
					<span>Tags: </span>
					<a href="#" rel="tag"><?php the_tags('', ', ', ''); ?></a>
				</span>
			</div> <!-- .single-blog-post   .post-styles -->
		</div>  <!-- .blog-post-container -->

		<!-- If comments are open (we have at least one comment), load up the comment template (comments.php).  If there is no comments.php file, load up Wordpress default comment output. -->
		<?php
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
		?>

		<?php endwhile; endif; ?>



<?php get_footer(); ?>
