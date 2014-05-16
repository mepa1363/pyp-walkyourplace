<?php

elgg_register_event_handler('init', 'system','pypWalkYourPlace_init');
function pypWalkYourPlace_init() {
	elgg_register_page_handler('pypWalkYourPlace', 'pypWalkYourPlace_page_handler');
	$item = new ElggMenuItem('pypWalkYourPlace', 'WalkYourPlace', 'pypWalkYourPlace');
	elgg_register_menu_item('site', $item);	
}
function pypWalkYourPlace_page_handler($page, $identifier) {
	$plugin_path = elgg_get_plugins_path();
	$base_path = $plugin_path . 'pypWalkYourPlace/pages/';
	require "$base_path/index.php";
	return true;
}