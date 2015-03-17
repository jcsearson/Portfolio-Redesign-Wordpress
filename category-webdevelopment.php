<?php

	/*
		Template Name: Webdevelopment
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
				<div class="category-archive-title">
					<h2 class="category-title">Web Development Posts</h2>
				</div>  <!-- .blog-title -->
				<section class="single-cat-post">
				<?php  // specifications for posts
					// set the "paged" parameter (use 'page' if the query is on a static front page)
    					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array(
						'cat'					=> '41',  //  '41' local / '67' live
						'paged'					=> $paged,  //  Highlights the current page number in pagination bar
					   	'posts_per_page'      	=> '5'
					);
				?>
				<?php $the_query = new WP_Query( $args );     // create a custom wordpress query  ?>
				<?php if ( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php // create our link now that the post is setup ?>
					<div class="main-post-cont">
						<h2 class="post-sample-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3 class="post-time-stamp">Posted on <?php the_date(); ?></h3>
						<h3 class="post-author-sign">Author: <?php the_author(); ?></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="button-wrapper">
						<span class="line-bar-after"></span>
						<a href="<?php the_permalink(); ?>" class="read-on-button">Read Article</a>
						<span class="line-bar-after"></span>
					</div>
					<?php endwhile; endif; ?>
					<?php
						//Adds conditional page navigation if more than 5 posts in category
						wp_pagination();
					?>
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