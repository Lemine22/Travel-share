<?php $this->layout('admin/layout', ['title' => 'Post edit']) ?>

<?php $this->start('main_content') ?>

	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit <?= $post->title ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div><!-- /.row -->

	<?php /*foreach($post->getProperties() as $key => $val) { ?>
	<label id="<?= $key ?>"><?= $key ?></label>&nbsp;&nbsp;
	<input type="text" id="<?= $key ?>" name="<?= $key ?>" value="<?= $val ?>">
	<br>
	<?php }*/ ?>

	<form method="POST">

		<input type="hidden" name="id" value="<?= $post->id ?>">

		<label id="user_id">user_id</label>&nbsp;&nbsp;
		<input type="text" id="user_id" name="user_id" value="<?= $post->user_id ?>">
		<br>
		<label id="title">title</label>&nbsp;&nbsp;
		<input type="text" id="title" name="title" value="<?= $post->title ?>">
		<br>
		<label id="name_bp">name_bp</label>&nbsp;&nbsp;
		<input type="text" id="name_bp" name="name_bp" value="<?= $post->name_bp ?>">
		<br>
		<label id="qui">qui</label>&nbsp;&nbsp;
		<input type="text" id="qui" name="qui" value="<?= $post->qui ?>">
		<br>
		<label id="type">type</label>&nbsp;&nbsp;
		<input type="text" id="type" name="type" value="<?= $post->type ?>">
		<br>
		<label id="adresse">adresse</label>&nbsp;&nbsp;
		<input type="text" id="adresse" name="adresse" value="<?= $post->adresse ?>">
		<br>
		<label id="city">city</label>&nbsp;&nbsp;
		<input type="text" id="city" name="city" value="<?= $post->city ?>">
		<br>
		<label id="country">country</label>&nbsp;&nbsp;
		<input type="text" id="country" name="country" value="<?= $post->country ?>">
		<br>
		<label id="description">description</label>&nbsp;&nbsp;
		<textarea id="description" name="description"><?= $post->description ?></textarea>
		<br>
		<label id="status">status</label>&nbsp;&nbsp;
		<input type="text" id="status" name="status" value="<?= $post->status ?>">
		<br>
		<label id="date">date</label>&nbsp;&nbsp;
		<input type="date" id="date" name="date" value="<?= $post->date ?>">
		<br>
		<label id="lat">lat</label>&nbsp;&nbsp;
		<input type="text" id="lat" name="lat" value="<?= $post->lat ?>">
		<br>
		<label id="lng">lng</label>&nbsp;&nbsp;
		<input type="text" id="lng" name="lng" value="<?= $post->lng ?>">
		<br>
		<label id="default_photo">default_photo</label>&nbsp;&nbsp;
		<input type="text" id="default_photo" name="default_photo" value="<?= $post->default_photo ?>">
		<br>
		<input type="submit" class="btn btn-primary" value="Envoyer">

	</form>

<?php $this->stop('main_content') ?>