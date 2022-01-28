<?php

	/*
		minis
	*/

	session_start();

	require_once __DIR__ . '/inc/config/config.php';

	require_once __DIR__ . '/inc/locale/'.SELECTED_LOCALE.'.php';

	require_once __DIR__ . '/inc/functions/database.php';
	require_once __DIR__ . '/inc/functions/session.php';
	require_once __DIR__ . '/inc/functions/pages.php';
	require_once __DIR__ . '/inc/functions/templates.php';
	require_once __DIR__ . '/inc/functions/menu.php';
	require_once __DIR__ . '/inc/functions/misc.php';

	$currentPage = getCurrentPage();

	$database = getDatabase();

?><!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?= BRAND_NAME ?></title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play:300,300i,700" />
		<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/css/98.css" />
		<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/css/<?=SELECTED_THEME?>.css" />
	</head>
	<body>

		<header>
			<?php
				renderMenu();
			?>
		</header>

		<div class="main">
			<?php
				renderCurrentPage();
				updateLastActivityTime();
			?>
		</div>

		<footer>
			<p>
				<?=LC_STR_POWERED_BY ?><em><?=BRAND_NAME?></em>.
			</p>
		</footer>

		<script type="text/javascript" src="<?= BASE_PATH ?>/js/main.js"></script>

	</body>

</html>