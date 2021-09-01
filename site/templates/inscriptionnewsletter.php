<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="newsletter">
		<?php snippet('breadcrumb') ?>
		<div class="content article row">
			<div class="col-xs-12 col-sm-7 col-sm-offset-3">
				<h1><?= $page->title()->html()?></h1>
				<div class="content-inner">
					<?= $page->text()->kt()?>
					<?php if ($form->success()): ?>
					  <div class="form-success">
					   	Merci ! Votre inscription a été prise en compte.
					   </div> 
					<?php else: ?>
					   <?php snippet('uniform/errors', ['form' => $form]); ?>
					<?php endif; ?>
					<form action="<?php echo $page->url() ?>" method="POST">
						<div class="form-group">
							<label for="nom">Nom <span class="required">*</span></label>
							<input name="nom" type="text" value="<?php echo $form->old('nom'); ?>">
						</div>
						<div class="form-group">
							<label for="prenom">Prenom <span class="required">*</span></label>
							<input name="prenom" type="text" value="<?php echo $form->old('prenom'); ?>">
						</div>
						<div class="form-group">
							<label for="email">Email <span class="required">*</span></label>
							<input name="email" type="email" value="<?php echo $form->old('email'); ?>">
						</div>
						<div class="form-group inline">
  						<label>
							    <?php $value = $form->old('brochure') ?>
							    <input type="checkbox" name="brochure" value="true"<?php e(!$value || $value=='Oui', ' checked')?>/> Recevoir la brochure papier
							</label>
						</div>
						<div class="form-group">
							<label for="adresse">Adresse postale</label>
							<input name="adresse" type="text" value="<?php echo $form->old('adresse'); ?>">
						</div>
						<div class="form-group">
							<label for="profession">Profession</label>
							<input name="profession" type="text" value="<?php echo $form->old('profession'); ?>">
						</div>
					   <?php echo csrf_field(); ?>
					   <?php echo honeypot_field(); ?>
					   <input type="submit" value="Envoyer">
					</form>

				</div>
				
			</div>
		</div>
		
	</main>

<?php snippet('footer') ?>
