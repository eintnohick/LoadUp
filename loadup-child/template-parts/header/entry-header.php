<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ($post->post_parent == 9) {
	echo '<h1 class="entry-title">Learn more about '.strtolower(get_the_title()).' in Atlanta, GA</h1>';
} else {
	the_title( '<h1 class="entry-title">', '</h1>' );
}

