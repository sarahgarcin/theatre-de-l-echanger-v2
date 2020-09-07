<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="content">
			<nav class="big-menu">
				<ul class="row">
				<?php foreach ($site->children()->listed() as $child):?>
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
				<?php endforeach; ?>
				</ul>
			</nav>
		</div>
	</main>

<?php snippet('footer') ?>
