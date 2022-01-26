<div class="panel profile">
	<?php if ($hasAvatar): ?>
		<img class="avatar" src="<?= BASE_PATH ?>/img/avatars/<?= $userId ?>.png" alt="<?=LC_ALT_AVATAR?>" />
	<?php else: ?>
		<img class="avatar" src="<?= BASE_PATH ?>/img/avatars/default.png" alt="<?=LC_ALT_AVATAR?>" />
	<?php endif; ?>

	<h2><?= $firstName ?> <?= $lastName ?></h2>

	<?php if ($emailPublic): ?>
		<p><?= $email ?></p>
	<?php endif ?>

	<p>
		<?=LC_STR_REGISTERED?>: <?= renderDate($registrationTime, true) ?><br />
		<?=LC_STR_LAST_ACTIVE?>: <?= $lastActivityTime === 0 ? 'never' : renderDate($lastActivityTime, true) ?>
	</p>

	<div class="clearfix"></div>

	<?php if ($bio !== ''): ?>
		<p><?= $bio ?></p>
	<?php endif ?>
</div>

<?php if ($isOwnProfile): ?>
	<a class="button" href="<?= BASE_PATH ?>/?p=edit-profile"><?=LC_STR_EDIT_PROFILE?></a>
<?php endif ?>

