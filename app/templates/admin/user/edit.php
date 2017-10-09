<?php $this->layout('admin/layout', ['title' => 'User edit']) ?>

<?php $this->start('main_content') ?>

	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit <?= $user->pseudo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div><!-- /.row -->


	<form method="POST">

		<input type="hidden" name="id" value="<?= $user->id ?>">

		<label id="id">id</label>&nbsp;&nbsp;
		<input type="text" id="id" name="id" value="<?= $user->id ?>">
		<br>
		<label id="pseudo">Pseudo</label>&nbsp;&nbsp;
		<input type="text" id="pseudo" name="pseudo" value="<?= $user->pseudo ?>">
		<br>
		<label id="user_picture">User_picture</label>&nbsp;&nbsp;
		<input type="text" id="user_picture" name="user_picture" value="<?= $user->user_picture ?>">
		<br>
		<label id="role">Role</label>&nbsp;&nbsp;
		<input type="text" id="role" name="role" value="<?= $user->role ?>">
		<br>
		<label id="login">Login</label>&nbsp;&nbsp;
		<input type="text" id="login" name="login" value="<?= $user->loogin ?>">
		<br>

		<input type="submit" class="btn btn-primary" value="Envoyer">

	</form>

<?php $this->stop('main_content') ?>