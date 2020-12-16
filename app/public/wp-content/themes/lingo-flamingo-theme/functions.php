<?php 
function lingo_flamingo_files() {
wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,700,700i|Rubik:100,300,400,400i,700,700i');
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('lingo_flamingo_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lingo_flamingo_files');

?>