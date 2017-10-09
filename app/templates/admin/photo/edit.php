<?php $this->layout('admin/layout', ['title' => 'Photo edit']) ?>

<?php $this->start('main_content') ?>

	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit photo du post : <?= $photo->post_id ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div><!-- /.row -->


	<form method="POST">

		<input type="hidden" name="id" value="<?= $user->id ?>">

		<label id="post_id">user_id</label>&nbsp;&nbsp;
		<input type="text" id="user_id" name="user_id" value="<?= $photo->post_id ?>">
		<br>
		<label id="photo_id">photo_id</label>&nbsp;&nbsp;
		<input type="text" id="title" name="title" value="<?= $photo->id ?>">
		<br>
		<label id="name_bp">Src</label>&nbsp;&nbsp;
		<input type="text" id="photo_id" name="photo_id" value="<?= $photo->src ?>">
		<br>

		<input type="submit" class="btn btn-primary" value="Envoyer">

	</form>

<?php $this->stop('main_content') ?>