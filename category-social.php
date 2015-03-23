<?php

	/*
		Template Name: Social
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
					<h2 class="category-title">Social Posts</h2>
				</div>  <!-- .blog-title -->
				<section class="single-cat-post">
				<?php  // specifications for posts
					// set the "paged" parameter (use 'page' if the query is on a static front page)
    					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array(
						'cat'					=> '66',  // '43' local / '66' live
						'paged'					=> $paged,  //  Highlights the current page number in pagination bar
					   	'posts_per_page'      	=> '5'
					);
				?>
				<?php $the_query = new WP_Query( $args );   // create a custom wordpress query  ?>
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
					<div class="jump-top-inner">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="125px" height="25px" viewBox="0 0 268.831 268.832" xml:space="preserve" class="arrowup"><g><path d="M223.255 83.659l-80-79.998c-4.881-4.881-12.797-4.881-17.678 0l-80 80c-4.883 4.882-4.883 12.8 0 17.7 c2.439 2.4 5.6 3.7 8.8 3.661s6.397-1.221 8.839-3.661l58.661-58.661v213.654c0 6.9 5.6 12.5 12.5 12.5 c6.901 0 12.5-5.597 12.5-12.5V42.677l58.661 58.659c4.883 4.9 12.8 4.9 17.7 0 C228.137 96.5 228.1 88.5 223.3 83.659z"/></g></svg>
					</div>
				</div>
			</section>
		</a>

<?php get_footer(); ?>