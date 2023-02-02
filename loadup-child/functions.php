<?php // LoadUp Child Theme

// Load parent theme css
function loadup_enqueue_styles() {
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts', 'loadup_enqueue_styles');

// Display child pages by shortcode
function child_pages_shortcode() { 
	global $id;
	
	$output = '';
	
	$results = get_children([
		'post_parent' => $id,
		'post_type'   => 'page',
		'post_status' => 'publish'
	]);

	if ($results) {
		$output .= '<ul class="page-children-list">';
		
		foreach ($results as $result) {
			$output .= '<li><a href="'.get_permalink($result->ID).'">Atlanta '.ucwords($result->post_name).' Haul Away</a></li>';
		}
		
		$output .= '</ul>';
	}
	
	return $output;
}
add_shortcode('child_pages', 'child_pages_shortcode');






