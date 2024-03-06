<?php
/*
Plugin Name: Hello World
Description: A simple "Hello World" plugin.
Author: Your Name
Version: 1.0
*/

function hello_world_display() {
  echo "Hello World!";
}

add_action( 'wp_footer', 'hello_world_display' );