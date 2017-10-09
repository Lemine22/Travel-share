<?php $this->layout('layout', ['title' => 'Inscription/Connexion']) ?>

<?php $this->start('main_content') ?>

<link href="<?= $this->assetUrl('css/register.css') ?>" rel="stylesheet">

<div class="containe-register">
	<div class="row">

		<?php if (!empty($errors)) { ?>
		<div class="alert alert-danger errors" role="alert">
			<ul>
				<?php
				foreach($errors as $error) {
					echo '<li>'.$error.'</li>';
				}
				?>
			</ul>
		</div>
		<?php } ?>

		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="#" class="authent-form-link active" id="login-form-link">Connexion</a>
						</div>
						<div class="col-xs-6">
							<a href="#" class="authent-form-link" id="register-form-link">Inscription</a>
						</div>
						</div> <!-- end row -->
					<hr>
				</div> <!-- end panel-heading -->
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="login-form" class="form-authent" action="<?= $this->url('user_login') ?>" method="post" role="form" style="display: block;"><!-- PARTIE LOGIN -->
								<div class="form-group">
									<input type="pseudo" name="pseudo" id="pseudo" tabindex="1" class="form-control" placeholder="Pseudo" value="<?= $pseudo ?>">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="" >
								</div>
								<div class="form-group text-center">
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label for="remember"> Remember Me</label>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
								</div>
							</form>
							<form id="register-form" class="form-authent" action="<?= $this->url('user_register') ?>" method="post" role="form" style="display: none;">    <!-- PARTIE REGISTER -->

								<input type="hidden" name="picture">

								<div class="form-group">
									<input type="login" name="login" id="login" tabindex="1" class="form-control" placeholder="Email Address" value="">
								</div>
								<div class="form-group">
									<input type="pseudo" name="pseudo" id="pseudo" tabindex="1" class="form-control" placeholder="Pseudo" value="<?= $pseudo  ?>">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="" >
								</div>
								<div class="form-group">
									<input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password">
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-bon-plan">Choisir Avatar</button>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="register-submit" id="register-submit" tabindex="-1" class="form-control btn btn-register" value="Register Now">
										</div>
									</div>
								</div>


							</form>
						</div><!-- end col 12 -->
					</div><!-- end row -->
				</div> <!-- end panel-body -->
			</div><!-- end panel-login -->
		</div><!-- end col 6-->
	</div><!-- end ROW -->
</div><!-- containe-register -->


<!-- Modal picture -->
<div class="modal fade" id="modal-bon-plan" tabindex="10" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-body">
				<div id="side-bar">
					<form id="form-picture-selection">
						<?php

						$images = glob(__DIR__.'/../../../public/assets/avatar/*.png');

						foreach ($images as $key => $image) {

							$image_filename = basename($image);
						?>

						<div class="menue">
							<label class="radio"  title="Patrimoine Culturel">
								<img src="<?= $this->assetUrl('avatar').'/'.$image_filename ?>" alt="">
								<input type="radio" id="checkbox" name="picture" value="<?= $image_filename ?>" />
							</label>
						</div>
						<?php } ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!-- .modal picture -->


<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
<!--
	<script src="<?= $this->assetUrl('js/app.js') ?>"></script>-->
	<script>
$(function() {
	$('.modal').css('display','none');

	$('.btn-lg').click(function(e){
		console.log('debug');

		//$('.modal').css('display','block');
		//$('.modal').fadeIn('slow');

		$('#modal-bon-plan').modal('show')

		e.stopPropagation();
	})

	function displayForm(type) {
		$('.form-authent').fadeOut(100);
		$('.authent-form-link').removeClass('active');

		$('#'+type+'-form').delay(100).fadeIn(100);
		$('#'+type+'-form-link').addClass('active');

	}

	$('#register-form-link').click(function(e) {
		$('.errors').hide();
		displayForm('register');
		e.preventDefault();
	});
	$('#login-form-link').click(function(e) {
		$('.errors').hide();
		displayForm('login');
		e.preventDefault();
	});


	$('#form-picture-selection input[type="radio"]').click(function() {
		var picture = $(this).val();
		$('#register-form input[name="picture"]').val(picture);
	});

	var page = '<?= basename($_SERVER['REQUEST_URI']) ?>';

	/*console.log(page);*/

	displayForm(page);

});


</script>

<?php $this->stop('main_content') ?>

