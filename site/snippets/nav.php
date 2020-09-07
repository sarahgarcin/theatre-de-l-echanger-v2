<div class="nav row end-xs">
	<div class="menu_btn">
		<span></span>
		<span></span>
		<span></span>
		<span class="menu_text">Menu</span>
	</div>
	<nav class="main-nav col-xs-12">
		<ul class="main-nav_first-level">
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