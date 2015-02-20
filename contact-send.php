<?php

	/*
		Template Name: Contact-Send
	*/

?>

<?php
	$day = date( 'l' );
	$time = date( 'h:i' );
	$hour = date( 'h' );
	$minute = date( 'i' );
?>

<?php get_header(); ?>

	<div class="main-container">
		<section class="about-container">
			<div class="cont-about tint">
				<div class="wrapper">
					<div class="thoughts">
					<?php
						$first_name = $_POST[ 'first_name' ];
						$last_name = $_POST[ 'last_name' ];
						$email = $_POST[ 'email' ];
						$message = $_POST[ 'message' ];

						$to = 'j.c.searson@gmail.com';
						$subject = 'New Submission - Contact Form - MovieWake';

						mail ($to, $subject, $message, "From: " . $first_name . ' ' . $last_name);

						$thanks = "Thank you for your message $first_name,  I will be sure to get back to you soon!  Sincerely,";
						$thanks .= "<br><br>";
					?>
						<p class="contact-submission-confirmation"><?php echo $thanks . "  " . "James." ?></p>
					</div>  <!-- .thoughts -->
				</div>  <!-- .wrapper -->
			</div>  <!-- .cont-about -->
		</section>  <!-- .about-container -->



		<div class="biography-outer-wrap">
			<div class="biography-intro">
				<h2>About Me</h2>
				<p>A self-taught web developer living in Baltimore, MD.</p>
			</div>
			<div class="biography-inner-wrap">
				<div class="history-wrap">
					<div class="bio-icon-wrap">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="bio-icon" x="0px" y="0px" viewBox="0 0 31.712 31.713" xml:space="preserve"><g><path d="M31.414 9.898l-6.517 6.284l-1.337-1.417l4.932-4.756c0.477-0.46 0.49-1.219 0.03-1.696l-4.403-4.566 c-0.223-0.23-0.523-0.361-0.843-0.366c-0.317-0.007-0.624 0.114-0.854 0.335l-3.887 3.747l3.375 3.5 c0.276 0.3 0.3 0.765-0.035 1.046c-0.203 0.194-0.5 0.255-0.752 0.173l-4.896-5.191l6.406-6.183 c0.389-0.371 1.013-0.35 1.4 0.037l7.405 7.676C31.797 8.9 31.8 9.5 31.4 9.898z M9.29 28.5 c-0.227 0.221-0.535 0.342-0.852 0.334c-0.319-0.006-0.622-0.137-0.844-0.364L3.191 23.93c-0.459-0.477-0.447-1.229 0.03-1.693 l2.025 2.104c0.279 0.3 0.7 0.3 1 0.021s0.295-0.733 0.015-1.023l-2.022-2.107l0.539-0.521l2.025 2.1 c0.277 0.3 0.7 0.3 1 0.021C8.143 22.6 8.2 22.1 7.9 21.809l-2.024-2.101l0.54-0.521l2.023 2.1 c0.279 0.3 0.7 0.3 1 0.021c0.291-0.278 0.296-0.734 0.018-1.025l-2.025-2.102l0.539-0.521l2.025 2.1 c0.278 0.3 0.7 0.3 1 0.021c0.107-0.104 0.177-0.234 0.205-0.368l-3.749-3.98L0.3 22.3 c-0.384 0.373-0.384 0.998-0.013 1.383l7.405 7.681c0.372 0.4 1 0.4 1.4 0.032l7.067-6.812l-1.336-1.417L9.29 28.528z M22.229 9.655c-0.934-0.965-0.906-2.511 0.062-3.442c0.963-0.933 2.508-0.905 3.4 0.061c0.934 1 0.9 2.513-0.062 3.4 C24.707 10.6 23.2 10.6 22.2 9.655z M23.274 8.647c0.376 0.4 1 0.4 1.4 0 c0.387-0.375 0.398-0.997 0.022-1.385c-0.375-0.388-0.997-0.401-1.385-0.026S22.899 8.3 23.3 8.647z M27.207 21.1 l-6.373 6.005L6.631 12.051l6.375-6.005L27.207 21.116z M14.075 10.248c0.003-0.144-0.049-0.286-0.151-0.392L13.23 9.1 c-0.206-0.219-0.553-0.23-0.774-0.023L12.08 9.452c-0.221 0.206-0.23 0.556-0.024 0.774l0.69 0.7 c0.103 0.1 0.2 0.2 0.4 0.171c0.145 0 0.769-0.503 0.769-0.503C14.007 10.5 14.1 10.4 14.1 10.248z M23.941 21.287c0.223-0.208 0.231-0.556 0.022-0.776l-7.979-8.465c-0.1-0.108-0.236-0.17-0.384-0.173 c-0.143-0.005-0.286 0.05-0.391 0.148l-0.377 0.356c-0.221 0.207-0.231 0.553-0.023 0.774l7.978 8.5 c0.104 0.1 0.2 0.2 0.4 0.174c0.146 0 0.287-0.05 0.394-0.15L23.941 21.287z M5.986 11.364l6.373-6.007l-1.646-1.746 L4.341 9.619L5.986 11.364z M1.5 6.601C1.153 6.2 1 5.7 1 5.244c0.016-0.503 0.229-0.977 0.596-1.322l3.612-3.403 c0.76-0.722 1.96-0.685 2.7 0.077l2.239 2.375L3.736 8.976L1.5 6.601z M2.637 5.294l1.17 1.244l3.863-3.64L6.497 1.7 L2.637 5.294z M30.44 29.694c0.109 0.3 0 0.723-0.252 0.971c-0.264 0.249-0.646 0.322-0.983 0.193l-7.564-2.886l6.366-6.007 L30.44 29.694z M28.419 27.1l-0.957-3.039l-3.701 3.491l2.978 1.136L28.419 27.1z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
					</div>
					<p>With my strong mathematical and engineering background from Virginia Tech, I can learn new languages and techniques easily.  </p>
				</div>
				<div class="tools-wrap">
					<div class="bio-icon-wrap">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="bio-icon" x="0px" y="0px" viewBox="0 0 23.303 23.303" xml:space="preserve"><g><path d="M7.131 16.607L0 12.718v-2.154l7.131-3.867v2.53l-4.969 2.387l4.969 2.5 C7.131 14.1 7.1 16.6 7.1 16.607z"/><path d="M8.349 17.968l4.729-12.633h1.494l-4.74 12.633H8.349z"/><path d="M16.172 16.607v-2.516l4.968-2.457l-4.968-2.438v-2.5l7.131 3.872v2.141L16.172 16.607z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
					</div>
					<p>I use HTML5, CSS3, JavaScript, jQuery, PHP,  Photoshop, Illustrator, MAMP and Wordpress to design and develop websites.</p>
				</div>
				<div class="other-likes-wrap">
					<div class="bio-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="bio-icon" x="0px" y="0px" viewBox="0 0 459 459" xml:space="preserve"><g><g id="videocam"><path d="M357 191.25V102c0-15.3-10.2-25.5-25.5-25.5h-306C10.2 76.5 0 86.7 0 102v255c0 15.3 10.2 25.5 25.5 25.5h306 c15.3 0 25.5-10.2 25.5-25.5v-89.25l102 102V89.25L357 191.25z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
					<p>In my spare time I enjoy watching film, listening to music, reading blogs, and hearing about what's new at conferences.</p>
				</div>
			</div>
		</div>

		<section class="portfolio-wrap">
			<h2>Recent Work</h2>
			<p>An example of my most recent work.</p>
			<article class="work">
				<div class="recent-item">
					<a href="http://www.drstevencaplan.com/">
						<div class="recent-work">
						</div>  <!-- .recent-work -->
					</a>
					<p>Design, HTML5, CSS3, Responsive, Wordpress</p>
				</div>  <!-- .recent-item -->
				<div class="work-description">
					<p>Dr. Caplan came to me because he needed a new design and CMS for his website.  He is a pediatric doctor and spends a great deal of time with concerned parents.  As a result, he wanted something that was professional but would appeal to children as well.</p>
				</div>  <!-- .work-description -->
			</article>  <!-- .work -->
			<h2>Recent Project</h2>
			<p>An example of my most recent personal project.</p>
			<article class="project">
				<div class="project-description">
					<p>MovieWake.com was a personal project of mine where I was able to demonstrate my ability to start with an idea, create a design, and then develop both the front and back end code to implement the site.  The premise for the site was to have a place where I can store a list of all the films I have watched which are not as well known to most people.</p>
				</div>  <!-- .project-description -->
				<div class="recent-item">
					<a href="http://moviewake.com/">
						<div class="recent-work">
						</div>  <!-- .recent-work -->
					</a>
					<p>Design, HTML5, CSS3, jQuery, Responsive, PHP, MySQL, Wordpress</p>
				</div>  <!-- .recent-item -->
				<div class="project-hidden-description">
					<p>MovieWake.com was a personal project of mine where I was able to demonstrate my ability to start with an idea, create a design, and then develop both the front and back end code to implement the site.  The premise for the site was to have a place where I can store a list of all the films I have watched which are not as well known to most people.</p>
				</div>  <!-- .project-description -->
			</article>  <!-- .project -->
		</section>  <!-- portfolio-wrap -->



		<div class="blog">
			<div class="blog-post-wrap">
				<div class="wrapper">
					<h1>Blog</h1>
					<p>Read what I have been talking about recently!</p>
				</div>  <!-- .wrapper -->
				<div class="blog-post">
					<div class="blog-head-banner">
						<a class="name-post-blog" href="single-post.php">Some Handy Code Pieces</a>
						<a class="blog-post-reply-count" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path d="M47.964 8.127H16.036c-4.4 0-8 3.6-8 8v20.977c0 4.4 3.6 8 8 8h7.397v10.768l13.333-10.768h11.197c4.4 0 8-3.6 8-8V16.127 C55.964 11.7 52.4 8.1 48 8.127z M50.964 37.104c0 1.626-1.374 3-3 3H36.767H35l-1.375 1.11l-5.191 4.193v-0.303v-5h-5 h-7.397c-1.626 0-3-1.374-3-3V16.127c0-1.626 1.374-3 3-3h31.928c1.626 0 3 1.4 3 3V37.104z"/><circle cx="21.7" cy="26.6" r="2.9"/><circle cx="32" cy="26.6" r="2.9"/><circle cx="42.3" cy="26.6" r="2.9"/></g></svg></a>
					</div>
					<p>Recently I got Premium WordPress Hosting with MediaTemple.  I have been working on a site for several months now and decided that I would need to have a host that could be more accessible to me in my times of need.  I use WebHosting For Students for my portfolio and have no complaints but I felt that MediaTemple would be better suited to a site which I expect to experience far greater traffic. [...]</p>
					<div class="blog-post-meta">
						<a href="single-post.php">
							<h5>( Read On... )</h5>
						</a>
						<h3>January 14, 2015</h3>
					</div>  <!-- .blog-post-meta -->
				</div>  <!-- .blog-post -->
				<div class="blog-post">
					<div class="blog-head-banner">
						<a class="name-post-blog" href="single-post.php">How Can Cache Affect You?</a>
						<a class="blog-post-reply-count" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path d="M47.964 8.127H16.036c-4.4 0-8 3.6-8 8v20.977c0 4.4 3.6 8 8 8h7.397v10.768l13.333-10.768h11.197c4.4 0 8-3.6 8-8V16.127 C55.964 11.7 52.4 8.1 48 8.127z M50.964 37.104c0 1.626-1.374 3-3 3H36.767H35l-1.375 1.11l-5.191 4.193v-0.303v-5h-5 h-7.397c-1.626 0-3-1.374-3-3V16.127c0-1.626 1.374-3 3-3h31.928c1.626 0 3 1.4 3 3V37.104z"/><circle cx="21.7" cy="26.6" r="2.9"/><circle cx="32" cy="26.6" r="2.9"/><circle cx="42.3" cy="26.6" r="2.9"/></g></svg></a>
					</div>
					<p>I recently made it my goal to set some time aside and dive into the underbelly of GitHub, something I have been avoiding for the past few months.  I have been reading up in the forums as well as a great video series called GitHub for Web Designers by James Williamson. The following is just a brief outline of some of the things I found helpful along the way. [...]</p>
					<div class="blog-post-meta">
						<a href="single-post.php">
							<h5>( Read On... )</h5>
						</a>
						<h3>December 12, 2014</h3>
					</div>  <!-- .blog-post-meta -->
				</div>  <!-- .blog-post -->
			</div>  <!-- .blog-post-wrap -->
		</div>  <!-- .blog -->



		<section class="contact-form">
			<h2 class="strikethrough contact-heading"><span>Contact Me</span></h2>
			<div class="contact-form-wrapper">
				<form id="form1" name="form1" class="input-contact" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="contact-send.php">

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
		</section>  <!-- .contact-form -->