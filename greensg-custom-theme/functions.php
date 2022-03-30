<?php

function load_stylesheets(){
  wp_register_style("bs", get_template_directory_uri()."/imported-css/bootstrap.min.css", array(), false, "all");
  wp_enqueue_style("bs");
  
  wp_register_style("style", get_template_directory_uri()."style.css", array(), false, "all");
  wp_enqueue_style("style");

  wp_register_style("main", get_template_directory_uri()."/css/main.css", array(), false, "all");
  wp_enqueue_style("main");

  wp_register_style("frontpage", get_template_directory_uri()."/css/front-page.css", array(), false, "all");
  wp_enqueue_style("frontpage");

  wp_register_style("aboutus", get_template_directory_uri()."/css/about-us.css", array(), false, "all");
  wp_enqueue_style("aboutus");

  wp_register_style("blog", get_template_directory_uri()."/css/blog.css", array(), false, "all");
  wp_enqueue_style("blog");

  wp_register_style("contact", get_template_directory_uri()."/css/contact.css", array(), false, "all");
  wp_enqueue_style("contact");
}
add_action("wp_enqueue_scripts", "load_stylesheets");

function load_js(){
  wp_register_script("frontpage", get_template_directory_uri()."/js/front-page.js", "", 1, true);
  wp_enqueue_script("frontpage");

  wp_register_script("aboutus", get_template_directory_uri()."/js/about-us.js", "", 1, true);
  wp_enqueue_script("aboutus");

  wp_register_script("blog", get_template_directory_uri()."/js/blog.js", "", 1, true);
  wp_enqueue_script("blog");

  wp_register_script("contact", get_template_directory_uri()."/js/contact.js", "", 1, true);
  wp_enqueue_script("contact");
}
add_action("wp_enqueue_scripts", "load_js");

function load_jq(){
  wp_deregister_script("jquery");
  wp_register_script("jq", get_template_directory_uri()."/imported-js/jquery.js", "", 1, true);
  wp_enqueue_script("jq");
}
add_action("wp_enqueue_scripts", "load_jq");

add_theme_support("menus");
register_nav_menu('header-menu',__( 'Header Menu' ));

?>