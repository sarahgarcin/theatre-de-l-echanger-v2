<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];?>
<?php $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];?>

	<main>
		<?php snippet('breadcrumb') ?>
		<div class="content prog-list-wrapper programmation row">
			<h1><?= $page->title()?></h1>	
			<ul class='row'>
					
					<!-- Afficher les pages de la page billetterie == pass illimité -->
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
										<?= $child->text()->kt()?>
										<?php if($child->billeterie()->isNotEmpty()):?>
											<div class="lien-billeterie">
												<a href="<?= $child->billeterie()?>" title="<?= $child->title()?>" target="_blank">
													Réserver un billet
												</a>
											</div>
										<?php endif;?>
									</div>
								</a>
							</li>
					<?php endforeach?>

					<!-- Afficher les pages spectacles -->

				<!-- $spectacles dans les controllers -->
					<?php foreach($spectacles as $child):?>
						<?php $dates = $child->datesFormatted()->toStructure(); ?>

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
									<div class="distributionsum">
										<?= $child->distributionsum()->kt() ?>
									</div>
									<?php if($dates = $child->datesFormatted()->toStructure()):?>
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
									<?php endif;?>
									<?php if($child->billeterie()->isNotEmpty()):?>
										<div class="lien-billeterie">
											<a href="<?= $child->billeterie()?>" title="<?= $child->title()?>" target="_blank">
												Réservez votre billet
											</a>
										</div>
									<?php endif;?>
								</div>
							</a>
						</li>
					<?php endforeach?>
				</ul>
		</div>
	</main>

<?php snippet('footer') ?>