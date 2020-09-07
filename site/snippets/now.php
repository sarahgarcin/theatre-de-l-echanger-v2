<?php
	$now = $site->children()->findBy('intendedTemplate', 'now');
?>

<div class="now-frame">
	<h2><?= $now->title(); ?></h2>
	<ul>
		<?php foreach ($now->actu()->split() as $actu): ?>
	  	<li>
	  		<?php 
	  			$actu = $site->index()->find($actu);
	  		?>
	  		<a href="<?= $actu->url() ?>" title="<?= $actu->title() ?>">
	  			<?= $actu->title() ?>
	  		</a>
	  			
	  	</li>
	  <?php endforeach ?>
	</ul>
</div>

