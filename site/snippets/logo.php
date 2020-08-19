<!-- MOBILE LOGO -->
<?php $logo = $site->logo()->toFile();?>
<div class="mobile-menu menu show-for-small-only">
	<div class="mobile-menu_logo logo">
		<a class="row" href="<?= $site->url()?>" title="<?= $site->title()?>">
			<img src="<?= $logo->url() ?>" alt="<?= $site->title()?>">
		</a>
	</div>
<!-- 	<div class="mobile-menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div> -->
</div>

<!-- DESKTOP LOGO -->
<div class="desktop-menu menu hide-for-small-only">
	<div class="desktop-menu_logo logo">
		<a class="row" href="<?= $site->url()?>" title="<?= $site->title()?>">
			<img src="<?= $logo->url() ?>" alt="<?= $site->title()?>">
		</a>
	</div>
</div>