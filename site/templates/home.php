<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="content">
			<nav class="big-menu">
				<ul class="row">
				<?php foreach ($site->children()->listed() as $child):?>
					<?php if($cover = $child->cover()->toFile()):?>
						<li class="col-xs col-sm" style="background-image: linear-gradient(black, black), url(<?= $cover->url()?>)">
					<?php else:
						if($child->covercolor() == 'black'):
							$color = '#000';
						elseif($child->covercolor() == 'gray'):
							$color = '#3F3F3F';
						else:
							$color = 'rgba(0,0,0, 0.55)';
						endif?>
						<li class="col-xs col-sm" style="<?php e($child->covercolor()->isNotempty(), 'background-color:'. $color, 'background-color:#000')?>">
					<?php endif;?>
						<a href="<?= $child->url()?>" title="<?= $child->title()?>">
							<?php if($coveryellow = $child->coveryellow()->toFile()):?> 
								<div class="yellow-pattern hide-for-small-only">
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
