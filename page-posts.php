<?php

	/*
		Template Name: Posts
	*/

?>

<?php get_header(); ?>


	<div class="main-container bio-landing">
		<section class="about-container">
			<div class="cont-about tint">
				<div class="wrapper">
					<div class="thoughts">
					</div>  <!-- .thoughts -->
				</div>  <!-- .wrapper -->
			</div>  <!-- .cont-about -->
		</section>  <!-- .about-container -->



		<div class="blog">
			<div class="blog-post-wrap">
				<div class="wrapper">
					<h1>Latest Blog Posts</h1>
				</div>  <!-- .wrapper -->
				<?php $query = new WP_Query( 'post_type=post' ); ?>
				<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="blog-post">
					<div class="blog-head-banner">
						<a class="name-post-blog" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<a class="blog-post-reply-count" href="#"><p><?php comments_number('0', '1', '%') ?></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path d="M47.964 8.127H16.036c-4.4 0-8 3.6-8 8v20.977c0 4.4 3.6 8 8 8h7.397v10.768l13.333-10.768h11.197c4.4 0 8-3.6 8-8V16.127 C55.964 11.7 52.4 8.1 48 8.127z M50.964 37.104c0 1.626-1.374 3-3 3H36.767H35l-1.375 1.11l-5.191 4.193v-0.303v-5h-5 h-7.397c-1.626 0-3-1.374-3-3V16.127c0-1.626 1.374-3 3-3h31.928c1.626 0 3 1.4 3 3V37.104z"/><circle cx="21.7" cy="26.6" r="2.9"/><circle cx="32" cy="26.6" r="2.9"/><circle cx="42.3" cy="26.6" r="2.9"/></g></svg></a>
					</div>
					<p><?php the_excerpt(); ?></p>
					<div class="blog-post-meta">
						<a href="<?php the_permalink(); ?>">
							<h5>( Read On... )</h5>
						</a>
						<h3><?php the_date('F d, Y'); ?></h3>
					</div>  <!-- .blog-post-meta -->
				</div>  <!-- .blog-post -->
				<?php endwhile; endif; ?>
			</div>  <!-- .blog-post-wrap -->
		</div>  <!-- .blog -->




			<div class="my-social">
				<ul class="foot-social">
					<li class="foot-list-item">
						<div class="foot-connect right-connect"></div>
					</li>  <!-- .foot-list-item -->
					<li class="foot-list-item"><a href="https://www.facebook.com/james.searson.7">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="foot-icon facebook" x="0px" y="0px" viewBox="-49 141 512 512" enable-background="new -49 141 512 512" xml:space="preserve"><path class="outer-icon" d="M207 141C65.6 141-49 255.6-49 397S65.6 653 207 653s256-114.6 256-256S348.4 141 207 141z M207 613 C87.7 613-9 516.3-9 397s96.7-216 216-216s216 96.7 216 216S326.3 613 207 613z"/><path class="inner-icon" d="M267.8 357.8h-44.5v-32.5c0-10 10.3-12.3 15.1-12.3c4.8 0 28.8 0 28.8 0v-43.9l-33-0.2 c-45 0-55.2 32.7-55.2 53.7v35.1h-32.6V403h32.6c0 58 0 122 0 122h44.3c0 0 0-64.6 0-122h37.7L267.8 357.8z"/></svg>
								<div class="fallback"></div>
					</a></li>  <!-- .foot-list-item -->
					<li class="foot-list-item">
						<div class="foot-connect"></div>
					</li>  <!-- .foot-list-item -->
					<li class="foot-list-item"><a href="https://twitter.com/GreatSearsino">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="foot-icon twitter" x="0px" y="0px" viewBox="-49 141 512 512" enable-background="new -49 141 512 512" xml:space="preserve"><path class="outer-icon" d="M207 141C65.6 141-49 255.6-49 397c0 141.4 114.6 256 256 256c141.4 0 256-114.6 256-256 C463 255.6 348.4 141 207 141z M207 613C87.7 613-9 516.3-9 397c0-119.3 96.7-216 216-216c119.3 0 216 96.7 216 216 C423 516.3 326.3 613 207 613z" class="style0"/><path class="inner-icon" d="M335 311.9c-4.3 2.6-17.2 7.7-29.3 9c7.7-4.5 19.2-19.2 22-30.9c-7.4 5.1-24.5 12.6-33 12.6c0 0 0 0 0 0 c-9.6-10.8-23.2-17.6-38.2-17.6c-29.2 0-52.8 25.5-52.8 56.9c0 4.4 0.5 8.6 1.4 12.7h0c-39.6-1.1-85.8-22.4-111.9-59 c-16 29.9-2.2 63 16 75.1c-6.2 0.5-17.7-0.8-23.1-6.4c-0.4 19.8 8.5 46 40.7 55.6c-6.2 3.6-17.2 2.6-22 1.8 c1.7 16.8 23.4 38.6 47.2 38.6c-8.5 10.5-37.4 29.7-73.1 23.6c24.3 15.9 52.6 25.2 82.6 25.2c85.2 0 151.4-74.4 147.8-166.1 c0-0.1 0-0.2 0-0.3c0-0.2 0-0.5 0-0.7c0-0.3 0-0.6 0-0.9C317.1 335.3 327.5 325.2 335 311.9z" class="style0"/></svg>
								<div class="fallback"></div>
					</a></li>  <!-- .foot-list-item -->
					<li class="foot-list-item">
						<div class="foot-connect"></div>
					</li>  <!-- .foot-list-item -->
					<li class="foot-list-item"><a href="https://www.linkedin.com/profile/view?id=350320926&trk=spm_pic">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="foot-icon linkedin" x="0px" y="0px" viewBox="-49 141 512 512" enable-background="new -49 141 512 512" xml:space="preserve"><path class="outer-icon" d="M207 141C65.6 141-49 255.6-49 397S65.6 653 207 653s256-114.6 256-256S348.4 141 207 141z M207 613 C87.7 613-9 516.3-9 397s96.7-216 216-216s216 96.7 216 216S326.3 613 207 613z" class="style0"/><g><g><path class="inner-icon" d="M79.1 524.9h48v-192h-48V524.9z M271.1 332.9c-41.1 0.7-61.3 30.6-64 32v-32h-48v192h48v-112 c0-4.1 10.1-37 48-32c20.3 1.3 31.3 28.2 32 32v112l47.8 0.2V392.2C333.2 373 323.6 333.6 271.1 332.9z M103.1 268.9 c-13.2 0-24 10.7-24 24s10.8 24 24 24s24-10.7 24-24S116.3 268.9 103.1 268.9z" class="style0"/></g></g></svg>
								<div class="fallback"></div>
					</a></li>  <!-- .foot-list-item -->
					<li class="foot-list-item">
						<div class="foot-connect left-connect"></div>
					</li>  <!-- .foot-list-item -->
				</ul>  <!-- .foot-social -->
			</div>  <!-- .my-social -->
		</section>  <!-- .contact-form -->


<?php get_footer(); ?>