<?php $logo = $site->logo()->toFile();?>

<!-- DESKTOP LOGO -->
<div class="desktop-menu menu">
	<div class="desktop-menu_logo logo">
		<a class="row" href="<?= $site->url()?>" title="<?= $site->title()?>">
			<img src="<?= $logo->url() ?>" alt="<?= $site->title()?>">
		</a>
	</div>
</div>