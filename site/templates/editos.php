<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="editos">
		<?php snippet('breadcrumb') ?>
		<?php $archives = $page->find('archives')?>
		<?php if($page->children()->listed()->count() > 1):?>
			<div class="archives-btn">
				<a href="<?= $archives->url()?>" title="<?= $archives->title()?>">
					<?= $archives->title()?>
				</a>
			</div>
		<?php endif;?>
		<div class="content article row">
			<?php $page = $page->children()->listed()->last();?>
			<div class="left-col col-xs-12 <?php e($page->imgleft()->isNotEmpty(), 'col-sm-5', 'col-sm-3')?>">
				<div class="photoswipe image-gallery" itemscope itemtype="http://schema.org/ImageGallery">
					<div class="row">
						<?php if($image = $page->imgleft()->toFile()):?>
							<figure class="col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
								<a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>" title="<?= $image->text()->value(); ?>">
									<img src="<?= $image->url(); ?>" itemprop="thumbnail" alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>" class="img-responsive"/>
								</a>
								<?php if($image->caption()->isNotEmpty()):?>
									<figcaption itemprop="caption description"><span>→ </span><?= $image->caption()->html()?></figcaption>
								<?php endif; ?>
							</figure>
						<?php endif;?>
						<?php if($page->imageslist()->isNotEmpty()):?>			    
			    		<?php $images =  $page->imageslist()->toFiles();?>
			        <?php foreach ($images as $image): ?>
		            <figure class="col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
	                <a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>"
	                   title="<?= $image->text()->value(); ?>">
	                    <img src="<?= $image->url(); ?>" itemprop="thumbnail"
	                         alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>"
	                         class="img-responsive"/>
	                </a>
		                
		                <?php if($image->caption()->isNotEmpty()):?>
											<figcaption itemprop="caption description"><span>→ </span><?= $image->caption()->html()?></figcaption>
										<?php endif; ?>
		            </figure>

			        <?php endforeach; ?>
						<?php endif;?>
					</div>
				</div>
				<div class="infos">
					<?= $page->infos()->kt()?>
				</div>
			</div>
			<div class="right-col col-xs-12 col-sm-7">
				<h1><?= $page->title()->html()?></h1>
				<div class="content-inner">
					<?= $page->text()->kt()?>
				</div>
				
			</div>
		</div>
		
	</main>
<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
