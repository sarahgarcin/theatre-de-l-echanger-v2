<?php
	$now = $site->index()->findBy('uid', 'spectacles')->children()->first();
	$next = $now->next();
?>
<?php if($now):?>
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
<?php endif;?>
<?php if($next):?>
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
<?php endif;?>

