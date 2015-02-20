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
		<div class="blog-comment-container">
			<h2 class="strikethrough comment-heading"><span>Comments</span></h2>
			<div class="single-comment post-styles">
			<?php wp_list_comments() ?>
				<div class="user-meta-data">
					<h3><?php comment_author( $comment_ID ); ?> </h3>
					<h4 class="time-stamp-comment-main">Published:  <?php comment_date('F d,Y'); ?></h4>

				</div>  <!-- .user-meta-data -->
				<p><?php comment_text(); ?></p>
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



<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<?php twentyfifteen_comment_nav(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php twentyfifteen_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .comments-area -->
