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
				$args = array(
					'status' => 'published',
					'order' => 'DEC',
				);
			?>
			<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<section class="single-cat-post">
					<div class="main-post-cont">
						<h2 class="post-sample-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3 class="post-time-stamp">Posted on <?php the_date(); ?></h3>
						<h3 class="post-author-sign">Author: <?php the_author(); ?></h3>
						<div class="post-img-thumb">
							<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
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
				<?php wp_reset_query(); ?>
				</section>
			</div>  <!-- .single-blog-post   .post-styles-->

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

		</section>  <!-- .single-post-container -->


		<a href="#top-page-jump" class="link-to-top">
			<section class="jump-top-wrap">
				<div class="jump-top-outer">
					<div class="jump-top-inner"></div>
				</div>
			</section>
		</a>

<?php get_footer(); ?>