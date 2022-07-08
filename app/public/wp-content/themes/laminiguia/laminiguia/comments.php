<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LaMiniguia
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			Opiniones
		</h2><!-- .comments-title -->

		<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
		
		<nav id="comment-nav-bottom" class="comment-navigation" role="navigation">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="post-link-nav">
						<span class="sunset-icon sunset-chevron-left" aria-hidden="true"></span> 
						<?php previous_comments_link( esc_html__( 'Older Comments', 'sunsettheme' ) ) ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 text-right">
					<div class="post-link-nav">
						<?php next_comments_link( esc_html__( 'Newer Comments', 'sunsettheme' ) ) ?>
						<span class="sunset-icon sunset-chevron-right" aria-hidden="true"></span>
					</div>
				</div>
			</div><!-- .row -->
		</nav>
		
	<?php endif; ?>

		<ol class="comment-list">
		<?php 
			
			$args = array(
				'style'				=> 'ol',
				'type'				=> 'all',
				'reply_text'		=> 'Responder',
				'avatar_size'		=> 40,
				'echo'				=> true
			);
			
			wp_list_comments( $args );
		?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'laminiguia' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

	

</div><!-- #comments -->