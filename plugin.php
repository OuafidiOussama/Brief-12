<?php
/*
 * Plugin Name:       Brief 11
 * Description:       This plugin removes the admin bar in your website so you can visulaize it as a normal client.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            OUAFIDI Oussama
 */

// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );