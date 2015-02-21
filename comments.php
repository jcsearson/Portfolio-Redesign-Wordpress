<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
		<ul class="commentlist">
			<h2 class="strikethrough comment-heading"><span>Comments</span></h2>
			<?php if($comments) : ?>
			<?php foreach($comments as $comment) : ?>
			<li class="single-comment post-styles">

				<div class="user-meta-data">
					<h3><?php comment_author(); ?></h3>
					<h4 class="time-stamp-comment-main">Published: <?php comment_date(' F d, Y'); ?></h4>

				</div>  <!-- .user-meta-data -->
				<p class="post-styles"><?php comment_text(); ?></p>
				<a class="comments-reply-link" href="<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>">Reply</a>

				<!-- A Reply to comment -->
				<ul class="reply-wrap">
					<li class="comment-reply">
						<div class="user-meta-data">
							<h3><?php comment_author(); ?></h3>
							<h4>Published:<?php comment_date(' F d, Y'); ?></h4>
						</div>  <!-- .user-meta-data -->
						<p class="post-styles"><?php comment_text(); ?></p>
					</li>  <!-- .comment-reply -->
				</ul>  <!-- reply-wrap -->
			</li>  <!-- .single-comment   .post-styles -->
			<?php endforeach; ?>
			<?php else : ?>
			<p>No comments yet...</p>
			<?php endif; ?>
		</ul>  <!-- .blog-comment-container -->



		<div class="user-comments">
			<form action="comments" method="post" class="comment-form">
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

