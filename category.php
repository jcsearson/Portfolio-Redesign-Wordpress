<?php

	/*
		Template Name: Category
	*/
	/*This is the template that displays posts of a particular category..*/

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
			<?php
			// get all the categories from the database
			$cats = get_categories();
				// loop through the categries
				foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
			?>
			<div class="category-archive-title">
				<h2 class="category-title">Blog Posts about <?php echo $cat->name; ?></h2>
			</div>  <!-- .blog-title -->
			<?php  // create a custom wordpress query
				$args = array(
				   	'cat' 					=> $cat_id,
				   	'post__per_page'      	=> '15'
				);
			?>
			<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<section class="single-cat-post">
					<div class="main-post-cont">
					<?php // create our link now that the post is setup ?>
						<h2 class="post-sample-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3 class="post-time-stamp">Posted on <?php the_date(); ?></h3>
						<h3 class="post-author-sign">Author: <?php the_author(); ?></h3>
						<div class="post-img-thumb">
							<?php
								$thumb_id = get_post_thumbnail_id();  // assigns thumbnail id to variable
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);  // stores args of thumbnail in array
								$thumb_url = $thumb_url_array[0];  // accesses the url of thumbnail args array and stores in variable to be used
							?>
							<img src="<?php echo $thumb_url ?>" alt="Thumbnail Image" class="post-featured-image">
						</div>
						<p><?php the_excerpt('[...]'); ?></p>
					</div>
					<div class="button-wrapper">
						<span class="line-bar-after"></span>
						<a href="<?php the_permalink(); ?>" class="read-on-button">Read Article</a>
						<span class="line-bar-after"></span>
					</div>
				<?php endwhile; endif; ?>
				<?php } ?>
				<?php wp_reset_query(); ?>
				</section>
			</div>  <!-- .single-blog-post   .post-styles-->

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