<?php

	/*
		Template Name: Home
	*/
	/*This is the template that is displayed on home page.*/

?>

<?php get_header(); ?>

	<div class="main-container">
		<section class="about-container">
			<div class="cont-about tint">
				<div class="wrapper">
					<div class="thoughts">
						<p></p>
					</div>  <!-- .thoughts -->
				</div>  <!-- .wrapper -->
			</div>  <!-- .cont-about -->
		</section>  <!-- .about-container -->

		<div class="biography-outer-wrap">
			<a id="about-me-jump"></a>
			<?php $query = new WP_Query( 'post_type=slogan' ); ?>
			<?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
			<div class="biography-intro">
				<h2>About Me</h2>
				<p><?php the_field('header'); ?></p>
			</div>  <!-- .biography-intro -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			<div class="biography-inner-wrap">
			<?php $secondquery = new WP_Query( 'post_type=about' ); ?>
			<?php if ($secondquery->have_posts()) : while($secondquery->have_posts()) : $secondquery->the_post(); ?>
				<div class="history-wrap">
					<div class="bio-icon-wrap">
						<?php the_field('school_icon'); ?>
					</div>  <!-- .bio-icon-wrap -->
					<p><?php the_field('school'); ?></p>
				</div>  <!-- .history-wrap -->
				<div class="tools-wrap">
					<div class="bio-icon-wrap">
						<?php the_field('tools_icon'); ?>
					</div>  <!-- .bio-icon-wrap -->
					<p><?php the_field('tools'); ?></p>
				</div>  <!-- .tools-wrap -->
				<div class="other-likes-wrap">
					<div class="bio-icon-wrap">
						<?php the_field('leisure_icon'); ?>
					</div>  <!-- .bio-icon-wrap -->
					<p><?php the_field('leisure'); ?></p>
				</div>  <!-- .other-likes-wrap -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			</div>  <!-- .biography-inner-wrap -->
		</div>  <!-- .biography-outer-wrap -->

		<section class="portfolio-wrap">
			<a id="portfolio-jump"></a>
			<?php $thirdquery = new WP_Query( 'post_type=project' ); ?>
			<?php if ($thirdquery->have_posts()) : while($thirdquery->have_posts()) : $thirdquery->the_post(); ?>
			<h2>Recent Work</h2>
			<p><?php the_field('title'); ?></p>
			<article class="work">
				<div class="recent-item">
					<a href="<?php the_field('link'); ?>">
						<div class="recent-work">
						</div>  <!-- .recent-work -->
					</a>
					<p><?php the_field('skills'); ?></p>
				</div>  <!-- .recent-item -->
				<div class="work-description">
					<p><?php the_field('description'); ?></p>
				</div>  <!-- .work-description -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			</article>  <!-- .work -->
			<?php $fourthquery = new WP_Query( 'post_type=jobs' ); ?>
			<?php if ($fourthquery->have_posts()) : while($fourthquery->have_posts()) : $fourthquery->the_post(); ?>
			<h2>Recent Project</h2>
			<p><?php the_field('title'); ?></p>
			<article class="project">
				<div class="project-description">
					<p><?php the_field('description'); ?></p>
				</div>  <!-- .project-description -->
				<div class="recent-item">
					<a href="<?php the_field('link'); ?>">
						<div class="recent-work">
						</div>  <!-- .recent-work -->
					</a>
					<p><?php the_field('skills'); ?></p>
				</div>  <!-- .recent-item -->
				<div class="project-hidden-description">
					<p><?php the_field('description'); ?></p>
				</div>  <!-- .project-description -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			</article>  <!-- .project -->
		</section>  <!-- portfolio-wrap -->
		<a href="#top-page-jump" class="link-to-top">
			<section class="jump-top-wrap">
				<div class="jump-top-outer">
					<div class="jump-top-inner"></div>
				</div>
			</section>
		</a>



		<div class="blog">
			<a id="blog-jump"></a>
			<div class="blog-post-wrap">
				<div class="wrapper">
					<h1>Blog</h1>
					<p>Read what I have been talking about recently!</p>
				</div>  <!-- .wrapper -->
				<?php
					$args = array(
						'posts_per_page' => '2',
						'status' => 'published'
					);
				?>
				<?php $query = new WP_Query( $args ); ?>
				<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="blog-post">
					<div class="blog-head-banner">
						<a class="name-post-blog" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<a class="blog-post-reply-count" href="<?php the_permalink(); ?>"><p><?php comments_number('0', '1', '%') ?></p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path d="M47.964 8.127H16.036c-4.4 0-8 3.6-8 8v20.977c0 4.4 3.6 8 8 8h7.397v10.768l13.333-10.768h11.197c4.4 0 8-3.6 8-8V16.127 C55.964 11.7 52.4 8.1 48 8.127z M50.964 37.104c0 1.626-1.374 3-3 3H36.767H35l-1.375 1.11l-5.191 4.193v-0.303v-5h-5 h-7.397c-1.626 0-3-1.374-3-3V16.127c0-1.626 1.374-3 3-3h31.928c1.626 0 3 1.4 3 3V37.104z"/><circle cx="21.7" cy="26.6" r="2.9"/><circle cx="32" cy="26.6" r="2.9"/><circle cx="42.3" cy="26.6" r="2.9"/></g></svg></a>
					</div>
					<!-- Access the thumbnail/feature image URL -->
					<?php
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0];
					?>
					<!-- Call the thumb URL variable using the echo funtion in order to provide the URL in the img source -->
					<img src="<?php echo $thumb_url ?>" alt="Post Featured Image" class="post-featured-image">
					<p><?php the_excerpt(); ?></p>
					<div class="blog-post-meta">
						<a href="<?php the_permalink(); ?>">
							<h5>( Read On... )</h5>
						</a>
						<h3><?php the_date('F d, Y'); ?></h3>
					</div>  <!-- .blog-post-meta -->
				</div>  <!-- .blog-post -->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>  <!-- .blog-post-wrap -->
		</div>  <!-- .blog -->



		<section class="contact-form">
			<a id="contact-me-jump"></a>
			<h2 class="strikethrough contact-heading"><span>Contact Me</span></h2>
			<div class="contact-form-wrapper">
				<form id="form1" name="form1" class="input-contact" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="contact-send">

				<ul>
					<li class="foli1">
						<span class="first-span">
							<input
								class="field1"
								name="first_name"
								type="text"
								value=""
								tabindex="1"
								placeholder="First Name"		/>
						</span>
						<span>
							<input
								class="field2"
								name="last_name"
								type="text"
								value=""
								tabindex="2"
								placeholder="Last Name"		/>
						</span>
					</li>  <!-- .foli1 -->
					<li id="foli3" class="notranslate">
						<div>
							<input
								id="field3"
								name="email"
								type="email"
								spellcheck="false"
								class="field text medium"
								value=""
								maxlength="255"
								tabindex="3"
								placeholder="Email"       />
						</div>
					</li>  <!-- .foli3 -->
					<li id="foli4" class="notranslate">
						<div class="msg-box">
							<textarea
								id="field4"
								name="message"
								class="field textarea small"
								spellcheck="true"
								rows="10" cols="50"
								tabindex="4"
								onkeyup=""
								placeholder="Message"
							       ></textarea>
						</div>
					</li>  <!-- #foli4 -->
					<li class="buttons">
						<div class="submit-button">
							<button id="saveForm" name="saveForm" class="submit" type="submit" value="submit" tabindex="5">
								<div class="submit-icon-wrap">
									<svg xmlns="http://www.w3.org/2000/svg" class="submit-ico" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 24 24" style="pointer-events: none; display: block;"><g><path d="M21 11l-7-7v4C7 9 4 14 3 19c2.5-3.5 6-5.1 11-5.1V18L21 11z"/></g></svg>
								</div>  <!-- .submit-icon-wrap -->
							</button>  <!-- .submit -->
						</div>  <!-- .submit-button -->
					</li>  <!-- .buttons -->
				</ul>
			</div>  <!-- contact-form-wrapper -->
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
			<a href="#top-page-jump" class="link-to-top">
				<section class="jump-top-wrap">
					<div class="jump-top-outer">
						<div class="jump-top-inner"></div>
					</div>
				</section>
			</a>
		</section>  <!-- .contact-form -->

<?php get_footer(); ?>