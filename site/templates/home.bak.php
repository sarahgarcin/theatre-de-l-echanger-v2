<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<?php $cover = $page->cover()->toFile()?>
		
		<div class="content">
			<div class='cover-wrapper' style="background-image: url(<?= $cover->url()?>)"></div>
			<div class="maintenance-wrapper col-text col-sm-8 col-sm-offset-2">
				<?= $page->maintenance()->kt()?>
			</div>
			<div class="pass-wrapper col-text col-sm-8 col-sm-offset-2">
				<?= $page->pass()->kt()?>
			</div>
			<div class="edito-wrapper col-text col-sm-8 col-sm-offset-2">
				<?= $page->edito()->kt()?>
			</div>
			<div class="ateliers-wrapper col-text col-sm-8 col-sm-offset-2">
				<?= $page->ateliers()->kt()?>
			</div>
		</div>
		<div class="programmation">
			<?php $prog = $site->find('programmation')?>
			<div class="programmation-title bandeau">
				<h2><?=$prog->title()?></h2>
			</div>
			<div class="prog-list-wrapper col-xs-12">
				<ul class='row'>
					<?php foreach($prog->children()->listed() as $child):?>
						<li class="col-xs-12 col-sm-6 col-md-3">
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
								<h3>
									<?= $child->dates()->html()?><br>
									<span class="hours"><?= $child->hours()->kt()?></span>
								</h3>
								<div class="distribution"><?= $child->distribution()->kt()?></div>
								
								<?php if($child->pdfs()->isNotEmpty()):?>
									<ul class="pdfs-wrapper">
										<?php foreach($child->pdfs()->toStructure() as $pdf):?>
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
								<?php if($child->billeterie()->isNotEmpty()):?>
									<div class="lien-billeterie">
										<a href="<?= $child->billeterie()?>" title="<?= $child->title()?>" target="_blank">
											Réservez votre billet
										</a>
									</div>
								<?php endif;?>
							</div>
						</li>
					<?php endforeach?>
				</ul>
				
			</div>
		</div>
	</main>

<?php snippet('footer') ?>
