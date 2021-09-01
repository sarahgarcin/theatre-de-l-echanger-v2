<div class="small-menu">
	<?php $sub =  $site->submenu()->toPages();?>
	<ul>
	<?php foreach($sub as $child): ?>
		<li>
			<a href="<?= $child->url() ?>" title="<?= $child->title() ?>">
		  	<?= $child->title() ?>
		  </a>
		</li>
	<?php endforeach ?>
	</ul>
</div>