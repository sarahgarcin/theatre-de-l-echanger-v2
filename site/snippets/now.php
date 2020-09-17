<?php
	$now = $site->index()->findBy('uid', 'spectacles')->children()->first();
	$next = $now->next();
?>

<div class="now-frame hide-for-small-only">
	<h2>En ce moment</h2>
	<ul>
		<li>
			<a href="<?= $now->url() ?>" title="<?= $now->title() ?>">
				<?= $now->title() ?>
			</a>
		</li>
	</ul>
</div>
<div class="now-frame hide-for-small-only">
	<h2>À venir</h2>
	<ul>
		<li>
			<a href="<?= $next->url() ?>" title="<?= $next->title() ?>">
				<?= $next->title() ?>
			</a>
		</li>
	</ul>
</div>

