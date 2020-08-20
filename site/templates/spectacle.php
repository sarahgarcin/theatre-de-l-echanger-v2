<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="content prog-list-wrapper spectacle row">
			<div class="left-spectacle col-xs-12 col-sm-5">
				<?php if($image = $page->cover()->toFile()):?>
					<div class="prog-cover-wrapper">
						<?= $image->thumb([
				      'width'   => 800,
				      'height'  => 800,
				      'quality' => 120
				    ])->html();?>
					</div>
				<?php endif;?>				
			</div>
			<div class="right-spectacle col-xs-12 col-sm-6">
				<h4><?= $page->genre()->html()?></h4>
				<h2><?= $page->title()->html()?></h2>
				<h3>
					<?= $page->dates()->html()?><br>
					<span class="hours"><?= $page->hours()->kt()?></span>
				</h3>
				<div class="distribution"><?= $page->distribution()->kt()?></div>
				<?php if($page->pdfs()->isNotEmpty()):?>
					<ul class="pdfs-wrapper">
						<?php foreach($page->pdfs()->toStructure() as $pdf):?>
							<?php if($file = $pdf->pdf()->toFile()):?>
								<li>
									<a href="<?= $file->url() ?>" title="<?= $pdf->title()?>" target="_blank">
										<?= $pdf->title() ?>
									</a>
								</li>
							<?php endif;?>
						<?php endforeach;?>
					</ul>
				<?php endif;?>
				<?php if($page->billeterie()->isNotEmpty()):?>
					<div class="lien-billeterie">
						<a href="<?= $page->billeterie()?>" title="<?= $page->title()?>" target="_blank">
							Réservez votre billet
						</a>
					</div>
				<?php endif;?>
				<div class="presentation-text">
					<?= $page->text()->kt()?>
				</div>
				<div class="credits-text">
					<?= $page->credits()->kt()?>
				</div>
				
			</div>
		</div>
	</main>

<?php snippet('footer') ?>