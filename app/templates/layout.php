<!DOCTYPE html>
<html lang="en">
<head>

	<?= $this->fetch('default/partials/header', array('title' => $title)) ?>

</head>

<body>

    <?= $this->fetch('default/partials/navbar') ?>

	<div id="main-container" class="container-fluid">
		<?= $this->section('main_content') ?>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal-bon-plan" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			</div>
		</div>
	</div><!-- .modal -->

	<?= $this->fetch('default/partials/footer') ?>

	<?= $this->section('footer_scripts') ?>

</body>
</html>