<?php $this->layout('layout', ['title' => 'Post view']) ?>

<?php $this->start('main_content') ?>
<link href="<?= $this->assetUrl('css/liens.css') ?>" rel="stylesheet">
<div class="container">

	<div class="row" id="view">

		<h1><?= $post->title ?></h1>
		<ul>
		<li>En <?= $post->qui ?></li>
		<li><?= $post->type ?></li>
		<li><?= $post->adresse ?></li>
		<li><?= $post->city ?></li>
		<li><?= $post->country ?></li>
		<li><?= $post->description ?></li>
		</ul>


		<blockquote>
			<?php foreach($post->getPhotos() as $photo) {

				$image_path = 'images/';
				if (!empty($photo->id)) {
					$image_path = 'images/bp/'.$photo->post_id.'/';
				}
			?>


			<img width="150" src="<?= $this->assetUrl($image_path.$photo->src) ?>">
			<?php } ?>
		</blockquote>

	</div>
</div>

<?php $this->stop('main_content') ?>