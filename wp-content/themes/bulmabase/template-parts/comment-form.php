<?php
/**
 * Template part for Comment form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bulma_brew
 */

?>

<div class="field">
	<div class="control">
		<?php $comment_args = array(

		'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="field">' . '<label class="label" for="author">' . __( 'Your Nick Name' ) . ( $req ? '<span> *</span>' : '' ) . '</label> ' .
								'<input id="author" class="input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',

								'email'  => '<div class="field">' .
										'<label class="label" for="email">' . __( 'Your Email Please' ) . ( $req ? '<span> *</span>' : '' ) . '</label> ' .
										'<div class="control">' .
										'<input id="email" class="input" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'. '</div></div>',
										'url'    => '' ) ),

								'comment_field' => '<div class="field">' .
										'<label class="label" for="comment">' . __( 'Post your comment:' ) . '</label>' .
										'<textarea id="comment" class="textarea" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
										'</div>',

										'comment_notes_after' => '',


		);

		comment_form($comment_args); ?>
	</div>
</div>
