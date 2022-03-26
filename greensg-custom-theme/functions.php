<?php

function load_stylesheets(){
  wp_register_style("bs", get_template_directory_uri()."/css/bootstrap.min.css", array(), false, "all");
  wp_enqueue_style("bs");
  
  wp_register_style("style", get_template_directory_uri()."/style.css", array(), false, "all");
  wp_enqueue_style("style");
}
add_action("wp_enqueue_scripts", "load_stylesheets");

function load_js(){
  wp_register_script("customjs", get_template_directory_uri()."/js/script.js", "", 1, true);
  wp_enqueue_script("customjs");
}
add_action("wp_enqueue_scripts", "load_js");

function load_jq(){
  wp_deregister_script("jquery");
  wp_register_script("jq", get_template_directory_uri()."/js/jquery.js", "", 1, true);
  wp_enqueue_script("jq");
}
add_action("wp_enqueue_scripts", "load_jq");

add_theme_support("menus");
register_nav_menu('header-menu',__( 'Header Menu' ));

?>