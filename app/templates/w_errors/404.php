<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>

	<link href="<?= $this->assetUrl('css/city.css') ?>" rel="stylesheet">

	<h1 class="city">404. Perdu ?</h1>

	<div class="container">
		<p>Page non trouvée</p>
	</div>

<?php $this->stop('main_content'); ?>
