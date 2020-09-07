<section class="bodytext" style="display:flex;">
	<?php if($data->layout() == 'textleft'):?>
		<div style="width:60%; padding-right: 40px;">
			<?= $data->text()->kt() ?>
		</div>
		<?php if($data->cover()->isNotEmpty()):?>
			<?php $image = $data->cover()->toFile();?>
			<div style="width:40%;">
				<img src="<?= $image->url() ?>" alt="" style="width:100%;">
			</div>
		<?php endif;?>
	<?php else:?>
		<?php if($data->cover()->isNotEmpty()):?>
			<?php $image = $data->cover()->toFile();?>
			<div style="width:40%;">
				<img src="<?= $image->url() ?>" alt="" style="width:100%;">
			</div>
		<?php endif;?>
		<div style="width:60%; padding-left: 40px;">
			<?= $data->text()->kt() ?>
		</div>
		
	<?php endif?>
</section>