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
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
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
							$tag_mod = $tag->name;
							$tag_hyph = str_replace(" ", "-", $tag_mod);
						?>
						<a href="/tag"><?php echo $tag_mod; ?></a>
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

			</div>  <!-- .blog-post-container -->

			<?php get_sidebar(); ?>

		</section>  <!-- .single-post-container -->

		<a href="#top-page-jump" class="link-to-top">
			<section class="jump-top-wrap">
				<div class="jump-top-outer">
					<div class="jump-top-inner">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="125px" height="25px" viewBox="0 0 268.831 268.832" xml:space="preserve" class="arrowup"><g><path d="M223.255 83.659l-80-79.998c-4.881-4.881-12.797-4.881-17.678 0l-80 80c-4.883 4.882-4.883 12.8 0 17.7 c2.439 2.4 5.6 3.7 8.8 3.661s6.397-1.221 8.839-3.661l58.661-58.661v213.654c0 6.9 5.6 12.5 12.5 12.5 c6.901 0 12.5-5.597 12.5-12.5V42.677l58.661 58.659c4.883 4.9 12.8 4.9 17.7 0 C228.137 96.5 228.1 88.5 223.3 83.659z"/></g></svg>
					</div>
				</div>
			</section>
		</a>



<?php get_footer(); ?>