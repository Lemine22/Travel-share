.<?php
$pages= array (

	'Qui sommes-nous ?' => 'qui.php',
	'Liens utils' => 'liens.php',

	);
$current_page = basename($_SERVER['PHP_SELF']);

?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="<?= $this->url('world') ?>"><img src="<?= $this->assetUrl('images/logo-travel-share.png') ?>" alt="logo"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="main-nav">
			<ul class="nav navbar-nav">

				<li  class="first-child" ><a href="<?= $this->url('default_qui') ?>">Qui Sommes Nous<!-- <span class="sr-only">(current)</span> --></a></li>
				<li  class="" ><a href="<?= $this->url('liens') ?>">Liens Utiles<!-- <span class="sr-only">(current)</span> --></a></li>
				<?php if (!empty($w_user)) { ?>
				<li class=""><a href="<?= $this->url('post_add') ?>">Mon Bon Plan
				<!-- <span class="sr-only">(current)</span> --></a></li>
				<li id="connexion">
					<a href="<?= $this->url('user_logout') ?>">
						<span class="glyphicon glyphicon-off"></span> Déconnexion
					</a>
				</li>
				<li class="" style="width: 80px; margin-top: 2px"><img id="user-picture" src="<?= $this->assetUrl('avatar/'.$w_user->user_picture) ?>" style="width: 80%;" alt="">
				<!-- <span class="sr-only">(current)</span> --></a></li>

				<?php
					if ($w_user->role == 'admin') {
				?>
				<li class=""><a href="<?= $this->url('admin_dashboard') ?>">Back Office</a></li>
				<?php
					}
				} else {
				?>
				<li id="connexion">
					<a href="<?= $this->url('user_register') ?>">
						<span class="glyphicon glyphicon-off"></span> Connexion / Inscription
					</a>
				</li>
				<?php } ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" role="search" onsubmit="location.href = '<?= $this->url('home') ?>search/' + $('#search').val(); return false;">
					<div class="form-group">
						<input type="text" id="search" name="search" class="form-control" placeholder="Pays, Ville ou Bon plan">
					</div>
					<button type="submit" class="btn btn-default">Rechercher</button>
				</form>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>