	<footer>
	<p>travel & share <?= date('Y') ?> <sup>&copy;</sup></p>
	</footer>


	<script>window.jQuery || document.write('<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"><\/script>')
	</script>
	<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/ie10-viewport-bug-workaround.js') ?>"></script>
	<script>

		function setBtnModalOpen() {
			$('.btn-modal-open').off('click').on('click', function() {

				var $modal = $('#modal-bon-plan');
				var $btn = $(this);
				var bon_plan_id = $btn.data('bon-plan');

				$.ajax({
					url: '<?= $this->url('home') ?>bon_plan/'+bon_plan_id,
					type: 'GET',
					data: [],
					dataType: 'html',
					success: function(result) {
						$modal.find('.modal-content').html(result);
						$modal.modal('show');
					},
					error: function(error) {
						console.log('Modal bon plan error > ', error);
					},
				});

			});
		}

		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
			$('[data-toggle="popover"]').popover();
			$('.carousel').carousel();

			setBtnModalOpen();
		});
	</script>