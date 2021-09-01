<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="edito-archives">
		<?php snippet('breadcrumb') ?>
		<div class="content prog-list-wrapper programmation row">
			<h1><?= $page->title()?></h1>	
			<ul class='row'>
				<?php foreach($page->parent()->children()->listed() as $child):?>
					<li class="col-xs-12 col-sm-6">
						<a href="<?= $child->url()?>" title="<?= $child->title()?>">
							<div class="prog-infos-wrapper">
								<h2><?= $child->title()->html()?></h2>
							</div>
						</a>
					</li>
				<?php endforeach?>
				</ul>
		</div>
	</main>

<?php snippet('footer') ?>