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

			<section class="sidebar-nav-wrap">
				<div class="sidebar-nav">
					<ol class="categories-wrap">
						<div class="title-sidebar-wrap">
							<h2>Categories</h2>
							<span class="line-bar-after"></span>
						</div>
						<!-- List all names of categories that are assigned to a post -->
						<?php
							$categories = get_categories();
							foreach($categories as $category) {
						?>
						<li><span>></span><a href="/category"><?php echo $category->name ?></a></li><br>
						<?php } ?>
					</ol>
					<ol class="recent-post-wrap">
						<div class="title-sidebar-wrap">
							<h2>Blog Posts</h2>
							<span class="line-bar-after"></span>
						</div>
						<!-- Query through 5 most recent post titles -->
						<?php
							$args = array(
								'posts_per_page' => '5',
								'status' => 'published',
								'order' => 'DEC'
							);
						?>
						<?php $query = new WP_Query( $args ); ?>
						<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
						<li><span>></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li><br>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</ol>
				</div>  <!-- .sidebar-nav -->
			</section>  <!-- .sidebar-nav-wrap -->


			<?php endwhile; endif; ?>
		</section>  <!-- .single-post-container -->
		<a href="#top-page-jump" class="link-to-top">
			<section class="jump-top-wrap">
				<div class="jump-top-outer">
					<div class="jump-top-inner"></div>
				</div>
			</section>
		</a>



<?php get_footer(); ?>