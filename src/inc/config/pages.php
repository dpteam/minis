<?php

	define('DEFAULT_PAGE_NAME', 'home');

	define('ERROR_PAGE', [
		'name' => '404'
	]);

	define('PAGES', [
		'home'           => [
			'name'    => 'home',
			'caption' => LC_CAPTION_HOME,
			'inMenu'  => true
		],
		'messages'       => [
			'name'      => 'messages',
			'caption'   => LC_CAPTION_MESSAGES,
			'condition' => isLoggedIn(),
			'inMenu'    => true,
			'related'   => ['delete']
		],
		'profile'        => [
			'name'      => 'profile',
			'caption'   => LC_CAPTION_MY_PROFILE,
			'condition' => isLoggedIn(),
			'inMenu'    => true,
			'related'   => ['edit-profile']
		],
		'logout'         => [
			'link'      => BASE_PATH . '/session.php?action=logout',
			'name'      => 'logout',
			'caption'   => LC_CAPTION_LOGOUT,
			'condition' => isLoggedIn(),
			'inMenu'    => true
		],
		'edit-profile'   => [
			'name'      => 'edit-profile',
			'condition' => isLoggedIn()
		],
		'delete' => [
			'name'      => 'delete',
			'condition' => isLoggedIn()
		]
	]);