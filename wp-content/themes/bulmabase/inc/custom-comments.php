<?php
/**
 * Customised Comment Design
 */

 //Add class to Comment Form Button
 function bit_comment_form( $args ) {
     $args['class_submit'] = 'button is-primary'; // since WP 4.1
     return $args;
 }
 add_filter( 'comment_form_defaults', 'bit_comment_form' );


 //Custom comment list
  function wpse_comment_callback($comment, $args, $depth) {
      if ( 'div' === $args['style'] ) {
          $tag       = 'div';
          $add_below = 'comment';
      } else {
          $tag       = 'div';
          $add_below = 'div-comment';
      }
      ?>
      <?php if ( 'div' != $args['style'] ) : ?>
      <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
 	    <?php endif; ?>

 			 <article class="media">
 			   <figure class="media-left">
 			     <p class="image is-64x64">
 						 <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args[''] ); ?>
 			     </p>
 			   </figure>

 			   <div class="media-content">
 			     <div class="content">
 			         <?php printf( __( '<strong>%s</strong>' ), get_comment_author_link() ); ?>
 							 <small>
 							 <?php if ( $comment->comment_approved == '0' ) : ?>
 	 							- <?php _e( 'Your comment is awaiting moderation.' ); ?>
 	 						 <?php endif; ?>
 						   </small>
 			          <?php comment_text(); ?>
 							 <a class="button"><?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?> · <?php
 	 				     				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
 	 				     				?>
						 	 </small>
 			     </div>
 			   </div>
 			 </article>


 	     <?php if ( 'div' != $args['style'] ) : ?>
      </div>
      <?php endif; ?>
      <?php
      }
