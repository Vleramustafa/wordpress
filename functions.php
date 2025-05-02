<?php
function load_script(){
    wp_enqueue_style('tech_style',get_stylesheet_uri(). '/style.css',array(),1.1,'all');
}
add_action('wp_enqueue_scripts','load_script');

?>