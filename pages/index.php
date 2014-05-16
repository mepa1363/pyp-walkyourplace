<?php

$title = "WalkYourPlace";
$content = elgg_view('pypWalkYourPlace/pypWalkYourPlace');
$vars = array('content' => $content);
$body = elgg_view_layout('one_columne', $vars);
echo elgg_view_page($title, $body);
?>