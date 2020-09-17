<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];?>
<?php $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];?>


	<main>
		<?php snippet('breadcrumb') ?>
		<div class="content prog-list-wrapper spectacle row">
			<div class="left-spectacle col-xs-12 <?php e($page->cover()->isNotEmpty(), 'col-sm-3', 'col-sm-3')?>">
				<?php if($image = $page->cover()->toFile()):?>
					<div class="prog-cover-wrapper">
						<?= $image->thumb([
				      'width'   => 800,
				      'height'  => 800,
				      'quality' => 120
				    ])->html();?>
					</div>
				<?php endif;?>	
				<div class="spectacle-btn hide-for-small-only">
						<?php if($page->billeterie()->isNotEmpty()):?>
							<div class="lien-billeterie">
								<a href="<?= $page->billeterie()?>" title="<?= $page->title()?>" target="_blank">
									Réserver un billet
								</a>
							</div>
						<?php endif;?>
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
				</div>		
			</div>
			<div class="right-spectacle col-xs-12 col-sm-9">
				<div class="spectacle-header">
					<h4><?= $page->genre()->html()?></h4>
					<h2><?= $page->title()->html()?></h2>
					<h4 class="compagnie"><?= $page->compagnie()->html()?></h4>
					<?php if($dates = $page->datesFormatted()->toStructure()):?>
						<h3>
							<?php foreach($dates as $date):?>
								<?php 
									$dayStart = $days[$date->start()->toDate('N')-1];
									$numberStart = $date->start()->toDate('d');
									$monthStart = $months[$date->start()->toDate('n')-1];
									$yearStart = $date->start()->toDate('Y');
									$dayEnd = $days[$date->end()->toDate('N')-1];
									$numberEnd = $date->end()->toDate('d');
									$monthEnd = $months[$date->end()->toDate('n')-1];
									$yearEnd = $date->end()->toDate('Y');

									$dateStart = $dayStart.' '.$numberStart.' '.$monthStart.' '.$yearStart;
									$dateEnd = $dayEnd.' '.$numberEnd.' '.$monthEnd.' '.$yearEnd;
								?>
								<?php if($dateStart == $dateEnd):?>
									<?= $dateStart?>
								<?php else:?>
									<?= $dateStart?> >> <?= $dateEnd?>
								<?php endif;?>
							<?php endforeach?>
						</h3>
						<div class="hours"><?= $page->hours()->kt()?></div>
					</div>
				<?php endif;?>
				<div class="row">
					<div class="content-inner col-xs-12 col-sm-8">
						<div class="distribution"><?= $page->distribution()->kt()?></div>
						<div class="presentation-text">
							<?= $page->text()->kt()?>
						</div>
					<div class="spectacle-btn show-for-small-only">
						<?php if($page->billeterie()->isNotEmpty()):?>
							<div class="lien-billeterie">
								<a href="<?= $page->billeterie()?>" title="<?= $page->title()?>" target="_blank">
									Réserver un billet
								</a>
							</div>
						<?php endif;?>
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
				</div>
						<div class="credits-text">
							<?= $page->credits()->kt()?>
						</div>
					</div>	
				</div>
				<?php $related = $page->related()->toPages();
					if ($related->count() > 0):?>
						<div class="related">
						<?php if($page->relatedtitle()->isNotEmpty()):?>
							<h3><?= $page->relatedtitle()->html()?></h3>
						<?php endif;?>
							<ul class="row">
						    <?php foreach($related as $article): ?>
						    <li class="col-xs-6 col-sm-4">
						      <a href="<?= $article->url() ?>">
							    	<?php if($image = $article->cover()->toFile()):?>
											<div class="prog-cover-wrapper">
												<?= $image->thumb([
										      'width'   => 300,
										      'height'  => 300,
										      'quality' => 80
										    ])->html();?>
											</div>
										<?php endif;?>
						      <h4><?= $article->title() ?></h4>
						      </a>
						    </li>
						    <?php endforeach ?>
						  </ul>
						</div>
					<?php endif;?>
				
			</div>


			<nav class="switch-page <?php e($page->hasPrev(), 'has-prev','no-prev')?>">
			<?php if($page->hasPrev()) : ?>
				<div class="prev-wrapper switch-wrapper">
			  	<a href="<?= $page->prev()->url() ?>">
			  		<div class="switch-arrow arrow-prev">
			  			← 
			  		</div>
			  		<div class="switch-text text-prev">
			  			<?= $page->prev()->title() ?>
			  		</div>
			  	</a>
			  </div>
			<?php endif ?>
			<?php if($page->hasNext()): ?> 
				<div class="next-wrapper switch-wrapper">
			  	<a href="<?= $page->next()->url() ?>">
			  		<div class="switch-text text-next">
			  			<?= $page->next()->title() ?>
			  		</div>
			  		<div class="switch-arrow arrow-next">
			  			→
			  		</div>
			  	</a>
			  </div>
			<?php  endif; ?>
			</nav>

		</div>
	</main>

<?php snippet('footer') ?>