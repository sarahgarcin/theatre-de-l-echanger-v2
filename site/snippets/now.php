<?php
	$now = $site->children()->findBy('intendedTemplate', 'now');
?>

<div class="now-frame hide-for-small-only col-sm-offset-2">
	<h2><?= $now->title(); ?></h2>
	<ul>
		<?php foreach ($now->actu()->split() as $actu): ?>
	  	<?php if($actu = $site->index()->find($actu)):?>
		  	<li>
		  		<a href="<?= $actu->url() ?>" title="<?= $actu->title() ?>">
		  			<?= $actu->title() ?>
		  		</a>
		  	</li>
		  <?php endif; ?>
	  <?php endforeach ?>
	</ul>
</div>

