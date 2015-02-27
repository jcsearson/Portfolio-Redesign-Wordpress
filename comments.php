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

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p>This post is password protected. Enter the password to view comments.</p>
<?php
	return;
}
?>

		<ol class="commentlist">
		<?php if( have_comments() ) : ?>
			<h2 class="strikethrough comment-heading"><span>Comments</span></h2>
			<?php wp_list_comments('callback=custom_comments'); ?>
			<?php else : ?>
				<li id="comment-<?php comment_ID() ?>" class="comments post-styles">
					<p>No comments yet ...</p>
				</li>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</ol>  <!-- .commentlist -->



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

