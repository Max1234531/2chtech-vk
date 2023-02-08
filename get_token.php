<?php
	include 'config.php';

	$permissions = ['wall', 'group', 'offline'];

	$request_params = [
	'client_id' => $app_id,
	'redirect_uri' => 'https://oauth.vk.com/blank.html',
	'response_type' => 'token',
	'display' => 'page',
	'scope' => implode(',', $permissions )
	];

	$link = '<p><a href="' . 'https://oauth.vk.com/authorize?'. urldecode(http_build_query($request_params)). '">Аутентификация через ВКонтакте</a></p>';

	echo $link;

?>