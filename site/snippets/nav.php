<div class="nav row end-xs">
	<div class="menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<nav class="main-nav col-xs-12">
		<ul class="main-nav_first-level">
			<?php foreach($pages->listed() as $p): ?>
				<?php if($p->intendedTemplate() == "now"):
						$actu = $site->find($p->actu());?>
					<li class="<?= r($actu->isOpen(), 'active') ?>">
		        	<a href="<?= $actu->url()?>" title="<?= $p->title()?>">
		        		<?= $p->title()->html() ?>
		        	</a>
		      </li>
				<?php else:?>
					<li class="<?= r($p->isOpen(), 'active') ?>">
		        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
		        		<?= $p->title()->html() ?>
		        	</a>
		      </li>
	     	<?php endif;?>
			<?php endforeach; ?>
		</ul>

	</nav>
</div>