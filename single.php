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


		<section class="single-post-container">
			<div class="blog-post-container">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div class="blog-title">
					<h2 class="blog-post-heading"><?php the_title(); ?></h2>
					<h3 class="blog-post-date">Published by <?php the_author(); ?> on <?php the_date('F d, Y'); ?></h3>
					<!-- Access the thumbnail/feature image URL -->
					<?php
						// If the post is from the math category, do not show the featured image when viewing the full post, because the question will already be written within the_content().
						if(! in_category('42')) {  //  '42' local / '65' live  <-- 'Mathematics' category

						$thumb_id = get_post_thumbnail_id();  // assigns thumbnail id to variable
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);  // stores args of thumbnail in array
						$thumb_url = $thumb_url_array[0];  // accesses the url of thumbnail args array and stores in variable to be used
					?>
					<!-- Call the thumb URL variable using the echo funtion in order to provide the URL in the img source -->
					<img src="<?php echo $thumb_url ?>" alt="Post Featured Image" class="post-featured-image">
					<?php } ?>
				</div>  <!-- .blog-title -->
				<div class="single-blog-post post-styles">
					<?php the_content(); ?>
				</div>  <!-- .single-blog-post   .post-styles-->
				<div class="blog-post-footer">
					<span class="blog-post-meta">
						<span>Tags: </span>
						<?php
						$tags = get_the_tags();
						$loopCount  = '0';  // Initialize counter for whether to add a trailing comma
						foreach ( $tags as $tag ) {
							$loopCount++;  // add 1 to loopCount before each iteration
							// access the location in array for string value for each tag
							$tag_id = $tag->term_id;
							// access the address in array for linking to tag-xxx template?
							$tag_link = $tag->term_link;
						?>
						<a href="<?php echo $tag->link; ?>" rel="tag"><?php echo $tag->name; ?></a>
						<?php
							// If there is anymore tags, print a comma
							if($loopCount < count($tags)) {
								echo ' ' . ',';
							// ...otherwise, only print a space.
							} else {
								echo ' ';
							}
						 } //  end foreach

						 ?>
					</span>
				</div> <!-- .single-blog-post   .post-styles -->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>  <!-- .blog-post-container -->

			<?php get_sidebar(); ?>

		</section>  <!-- .single-post-container -->

		<a href="#top-page-jump" class="link-to-top">
			<section class="jump-top-wrap">
				<div class="jump-top-outer">
					<div class="jump-top-inner"></div>
				</div>
			</section>
		</a>



<?php get_footer(); ?>