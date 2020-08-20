<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<?php snippet('breadcrumb') ?>
		<div class="content article row">
			<div class="left-col col-xs-10 col-md-5">
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
			<div class="right-col col-md-6">
				<h1><?= $page->title()->html()?></h1>
				<?= $page->text()->kt()?>
			</div>
		</div>
		
	</main>
<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
