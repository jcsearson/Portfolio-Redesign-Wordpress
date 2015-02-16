<?php include("parts/doctype.php"); ?>

	<body>
		<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


		<div class="head-container">
				<div class="head-wrap">
					<?php include("parts/header.php"); ?>

					<?php include("parts/nav.php"); ?>
				</div>  <!-- .head-wrap -->
		</div>  <!-- .head-container -->

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



			<div class="blog-post-container">
				<div class="blog-title">
					<h2>Helpful Things to know about Contact Forms</h2>
					<h3>Published by James Searson on February 3, 2015</h3>
				</div>  <!-- .blog-title -->
				<div class="single-blog-post post-styles">
					<p>I was redesigning the contact portion of my portfolio site today, and as per usual spent quite <em>a bit of time googling and searching things</em> to get the form jusssst right.  Here are a few of the things I incorporated into the final product:</p>
					<h2>1.  Placeholder Text h2</h2>
					<h3>1.  Placeholder Text h3</h3>
					<h4>1.  Placeholder Text h4</h4>
					<h5>1.  Placeholder Text h5</h5>
					<p>It’s fairly simple to add placeholder text to all inputs / textarea parts of your form.  Simply add something like this to your input tags:</p>
					<pre rel="Markdown"><code markup="tt" class="language-markup">&lt;button class="submit" value="submit">
						&lt;svg>&lt;/svg>
					&lt;/button></code></pre>
					<p>What I ended up playing around with for a little while however was the effects you can use with this text. First and foremost, you can play with the styles in your css file by using something like in this example:</p>
					<pre><code class="language-css">input::-webkit-input-placeholder {
						color: #ABABAB;
						font-size: 16px;
						padding: 5px 0 0 10px;
					}</code></pre>
					<p>What really bothers me about web forms is when the placeholder text does not disappear after clicking on the input or textarea.  Having the text remain until a person begins to type may cause confusion in someone who is not as familiar with using the web (e.g. the elderly).  So how did I do it?</p>
					<pre><code class="language-css">input:focus::-webkit-input-placeholder {
						opacity: 0;
						transition: opacity 0.2s 0.2s linear;
					}</code></pre>
					<p>The transition property in the above code was something I picked up from this <a href="http://css-tricks.com/hang-on-placeholders/">post</a> by Chris Coyier and I think it is a fair compromise.  The text doesn’t disappear immediately upon clicking, but also will not remain their waiting for the visitor to begin typing.</p>
					<h3>2. The Submit Button</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dignissimos quae exercitationem et, fuga cumque, quas ex libero blanditiis ducimus expedita hic doloribus ea laboriosam quasi quos. Ratione, adipisci suscipit!</p>
					<img src="images/content/baltimore.jpg" class="aligncenter" alt="">
					<p>The standard submit button is rather ugly and comes with all these pre-supplied styles attached to it.  This is related to one such method of creating a button, which would involve using an input field and then attempting to style through it.  I did not like this method for the reason above and decided to go an alternative route.  The button tags!</p>
					<img src="images/content/james.png" class="aligncenter" alt="">
					<p>Along with what I believe is a more accessible method for styling, I now can also use an <strong>SVG</strong> icon in place of the boring and unappealing “Submit” text that we have grown so accustomed to seeing.  Assign a class to your button, use the background css property to call for your icon, and then style away.</p>
					<p class="media-wrap">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/tymWDB7gtK4" frameborder="0" allowfullscreen></iframe>
					</p>  <!-- .media-wrap -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nihil cumque asperiores nostrum tempore, quam nemo facilis maiores iusto deserunt eum veniam, possimus assumenda quis natus vitae dolorum et adipisci!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ad, eos odit. Et veniam quos vel ipsum eos eum a molestiae, qui quam, perferendis quas, recusandae mollitia inventore optio quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quis molestias esse. Vitae reprehenderit voluptate laudantium provident quasi magni id nulla error ut ipsum, ab, veniam, esse, aliquam tempora pariatur.</p>
					<ul>
						<li><a href="#">Mercury</a></li>
						<li>Venus</li>
						<li>Earth</li>
						<li>Mars</li>
						<li>Jupiter</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati animi, iusto alias nesciunt nostrum quae magni molestias dignissimos ad tenetur voluptas at, reiciendis deserunt maxime et similique illum eligendi numquam.</p>
				</div>  <!-- .single-blog-post   .post-styles-->
				<div class="blog-post-footer">
					<span class="blog-post-meta">
						<span>Tags: </span>
						<a href="#" rel="tag">Web Design, </a>
						<a href="#" rel="tag">Web Development, </a>
						<a href="#" rel="tag">Wordpress</a>
					</span>
				</div>
			</div>  <!-- .blog-post-container -->

			<div class="blog-comment-container">
				<h2 class="strikethrough comment-heading"><span>Comments</span></h2>
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>Matt edwards</h3>
						<h4 class="time-stamp-comment-main">Published:  January 21, 2015</h4>

					</div>  <!-- .user-meta-data -->
					<p>Hey Chris,  <br><br>Just a heads up. I’m not sure where the issue lies but I can’t get the video embed to play in chrome on an iPad. It just doesn’t respond to touch.</p>
					<a class="comments-reply-link" href="#">Reply</a>
					<section class="reply-wrap">
						<div class="comment-reply">
							<div class="user-meta-data">
								<h3>Chris Coyier</h3>
								<h4>Published:  January 21, 2015</h4>

							</div>  <!-- .user-meta-data -->
							<p>It’s just a YouTube embed, so I dunno. Do other YouTube embeds work for you? I’m burying this just because it doesn’t have anything to do with the content for this video, but we can keep talking it out if you like.</p>
						</div>  <!-- .comment-reply -->
					</section>  <!-- reply-wrap -->
					<section class="reply-wrap">

						<div class="comment-reply">
							<div class="user-meta-data">
								<h3>Todd</h3>
								<h4>Published:  January 27, 2015</h4>

							</div>  <!-- .user-meta-data -->
							<p>Same here. On Safari iPhone 6</p>
						</div>  <!-- .comment-reply -->
					</section>  <!-- .reply-wrap -->
				</div>  <!-- .single-comment   .post-styles -->
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>shaneisme</h3>
						<h4>Published:  January 27, 2015</h4>

					</div>  <!-- .user-meta-data -->
					<p>You should get posts once, and then split them after so you only have one query :)</p>
					<a class="comments-reply-link" href="#">Reply</a>
				</div><!-- .single-comment   .post-styles -->
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>Vitor Melo</h3>
						<h4>Published:  January 29, 2015</h4>

					</div><!-- .user-meta-data -->
					<p>ACF is very userful. I don’t live without it in my projects, thanks for video Chris.</p>
					<a class="comments-reply-link" href="#">Reply</a>
				</div><!-- .single-comment   .post-styles -->
				<div class="single-comment post-styles">
					<div class="user-meta-data">
						<h3>Vitor Melo</h3>
						<h4>Published:  January 29, 2015</h4>

					</div>  <!-- .user-meta-data -->
					<p>I like to plugin Types too (<a href="https://wordpress.org/plugins/types/screenshots/">https://wordpress.org/plugins/types/screenshots/</a>). This plugin combine, CTP with Custom Fields.</p>
					<a class="comments-reply-link" href="#">Reply</a>
				</div>  <!-- .single-comment   .post-styles -->
			</div>  <!-- .blog-comment-container -->



			<div class="user-comments">
				<form action="wp-comments-post.php" method="post" class="comment-form">
					<h2 class="title-comments-form">Leave a Reply</h2>

					<div class="input-comments">
						<span class="first-span">
							<input
								class="comment-field1"
								name="first_name"
								type="text"
								value=""
								tabindex="1"
								placeholder="First Name"		/>
						</span>
						<span>
							<input
								class="comment-field2"
								name="last_name"
								type="text"
								value=""
								tabindex="2"
								placeholder="Last Name"		/>
						</span>
						<div class="email-box">
							<input
								class="comment-field3"
								name="email"
								type="email"
								spellcheck="false"
								class="field text medium"
								value=""
								maxlength="255"
								tabindex="3"
								placeholder="Email   ( hidden )"       />
						</div>
						<div class="msg-box">
							<textarea
								class="comment-field4"
								name="message"
								class="field textarea small"
								spellcheck="true"
								rows="10" cols="50"
								tabindex="4"
								onkeyup=""
								placeholder="Message"
							       ></textarea>
						</div>
						<div class="submit-comment-button">
							<button name="saveForm" class="submit" type="submit" value="Post" tabindex="5">
								<div class="submit-icon-wrap">
									<h3>Post</h3>
								</div>  <!-- .submit-icon-wrap -->
							</button>  <!-- .submit -->
						</div>  <!-- .submit-button -->
					</div>
				</form>
			</div>


			<?php include("parts/footer.php"); ?>
		</div>  <!-- .main-container -->
	</body>
</html>