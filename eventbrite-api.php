<?php

/*
Plugin Name: Eventbrite API
Plugin URI: https://github.com/Automattic/eventbrite-api
Description: A WordPress plugin that integrates the Eventbrite API with WordPress and Keyring.
Version: 1.0
Author: Automattic
Author URI: http://automattic.com
License: GPL v2 or newer <https://www.gnu.org/licenses/gpl.txt>
*/

add_action( 'keyring_load_services', 'init_eventbrite_api', 11 );

function init_eventbrite_api() {
	require_once( 'inc/api.php' );
	require_once( 'inc/admin.php' );
	require_once( 'inc/functions.php' );
	require_once( 'inc/class-eventbrite-query.php' );
	require_once( 'inc/class-eventbrite-post.php' );
	require_once( 'inc/event-template.php' );
}
