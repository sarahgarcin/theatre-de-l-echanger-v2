<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="content prog-list-wrapper programmation row">
			<h1><?= $page->title()?></h1>
			<ul class='row'>
					<?php foreach($page->children()->listed() as $child):?>
						<li class="col-xs-12 col-sm-6 col-md-3">
						<a href="<?= $child->url()?>" title="<?= $child->title()?>">
							<?php if($image = $child->cover()->toFile()):?>
								<div class="prog-cover-wrapper">
									<?= $image->thumb([
							      'width'   => 300,
							      'height'  => 300,
							      'quality' => 80
							    ])->html();?>
								</div>
							<?php endif;?>
								<div class="prog-infos-wrapper">
									<h4><?= $child->genre()->html()?></h4>
									<h2><?= $child->title()->html()?></h2>
									<h4 class="compagnie"><?= $child->compagnie()->html()?></h4>
									<h3>
										<?= $child->dates()->kt()?>
										<span class="hours"><?= $child->hours()->kt()?></span>
									</h3>
								</div>
							</li>
						</a>
					<?php endforeach?>
				</ul>
		</div>
	</main>

<?php snippet('footer') ?>