<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="content article row">
			<div class="right-col col-xs-12 col-sm-6">
				<h1><?= $page->title()->html()?></h1>
				<ul>
					<?php foreach($page->children() as $newsletter):
						$htmls = $newsletter->files()->filterBy('extension', 'md');
						foreach($htmls as $html):?>
							<li>
								<a href="<?= $html->url() ?>" title="<?= $newsletter->title() ?>" download>
									<?= $newsletter->title() ?>
								</a>
							</li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		
	</main>
<?php snippet('footer') ?>
