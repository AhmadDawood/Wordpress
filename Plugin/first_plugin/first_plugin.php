<?php

/**
 * Plugin Name: first-plugin
 * Version: 1.0
 */
 
 // Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

