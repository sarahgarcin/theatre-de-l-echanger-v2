<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="content">
			<nav class="big-menu">
				<ul class="row">
				<?php foreach ($site->children()->listed() as $child):?>
					<?php if($child->intendedTemplate() == "now"):?>
						<?php 
							$actu = $site->find($child->actu());
							$cover = $actu->covermenu()->toFile();
						?>
						<li class="col-xs-12 col-sm" style="background-image: linear-gradient(black, black), url(<?= $cover->url()?>)">
							<a href="<?= $actu->url()?>" title="<?= $actu->title()?>">
								<?php if($coveryellow = $actu->coveryellow()->toFile()):?> 
									<div class="yellow-pattern">
										<img src="<?= $coveryellow->url()?>" alt="">
									</div>
								<?php endif;?>
								<div class="big-menu-text">
									<?= $child->title()?>
									<div class="infos-spectacle hide-for-small-only">
										<h2><?= $actu->title()->html()?></h2>
										<h3>
											<?= $actu->dates()->html()?><br>
											<span class="hours"><?= $actu->hours()->kt()?></span>
										</h3>
									</div>
								</div>
							</a>
						</li>
					<?php else:?>
						<?php if($cover = $child->cover()->toFile()):?>
							<li class="col-xs-12 col-sm" style="background-image: linear-gradient(black, black), url(<?= $cover->url()?>)">
						<?php else:?>
							<li class="col-xs-12 col-sm" style="background-color:#000">
						<?php endif;?>
							<a href="<?= $child->url()?>" title="<?= $child->title()?>">
								<?php if($coveryellow = $child->coveryellow()->toFile()):?> 
									<div class="yellow-pattern">
										<img src="<?= $coveryellow->url()?>" alt="">
									</div>
								<?php endif;?>
								<div class="big-menu-text">
									<?= $child->title()?>
								</div>
							</a>
						</li>
					<?php endif?>
				<?php endforeach; ?>
				</ul>
			</nav>
		</div>
	</main>

<?php snippet('footer') ?>
