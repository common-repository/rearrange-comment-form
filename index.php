<?php
/**
 * Plugin Name: Rearrange Comment Form
 * Plugin URI: 
 * Description: This Plugin replaces the new WordPress 4.4 comment form to look like the previous one.
 * Version: 1.0.0
 * Author: Amin
 * Author URI: http://aminmajid.com
 * License: GPL2
 */
 
function RearrangeCommentForm( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
	}
	add_filter( 'comment_form_fields', 'RearrangeCommentForm' );
 
 