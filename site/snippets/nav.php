<div class="nav col-sm-6 row end-md">
	<nav class="main-nav col-xs-12">
		<ul class="main-nav_first-level row between-md middle-md">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= r($p->isOpen(), 'active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title()->html() ?>
	        	</a>
	      </li>
			<?php endforeach; ?>
		</ul>

	</nav>
</div>