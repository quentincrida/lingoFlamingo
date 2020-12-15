<?php 
function lingo_flamingo_files() {
wp_enqueue_style('lingo_flamingo_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lingo_flamingo_files');

?>