<!DOCTYPE html>
<html lang="en">
<head>

	<?= $this->fetch('admin/partials/header', array('title' => $title)) ?>

</head>

<body>

	<div id="wrapper">

	    <?= $this->fetch('admin/partials/topbar') ?>
	    <?= $this->fetch('admin/partials/navbar') ?>

		<div id="page-wrapper">
			<?= $this->section('main_content') ?>
		</div>

		<?= $this->fetch('admin/partials/footer') ?>

	</div><!-- /#wrapper -->

	<?= $this->section('footer_scripts') ?>

</body>
</html>