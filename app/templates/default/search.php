<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<link href="<?= $this->assetUrl('css/search.css') ?>" rel="stylesheet">

<div class="formulaire">

	<?php if (!empty($search)) { ?>
	<hr>

	<h3><?= $count_search_results ?> résultat(s) de recherche</h3>

	<div class="results">

		<?php
		foreach($search_results as $key => $bon_plan) {
		?>
		<div class="search-result">
			<h4><?= $bon_plan->name_bp ?></h4>
			<p> Pays: <?= $bon_plan->country ?></p>
			<p> Ville: <?= $bon_plan->city ?></p>
			<button type="button" class="btn btn-primary btn-lg btn-modal-open" data-bon-plan="<?= $bon_plan->id ?>">
				Voir plus..
			</button>
		</div>
		<hr>
		<?php } ?>

	</div>
	<?php } ?>
<?php $this->stop('main_content') ?>
