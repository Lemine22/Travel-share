<?php
foreach($bon_plans as $key => $bon_plan) {
?>
<div id="bon-plan-<?= $bon_plan->id ?>" class="plan">
	<div class="row">
		<div class="avatar">

			<img src="<?= $this->assetUrl('/avatar/'.$bon_plan->user->user_picture) ?>" alt="..." class="img-circle">
			<p>
				<?= $bon_plan->user->pseudo ?><br>

				<?= $bon_plan->date ?>
			</p>
		</div>
		<figure>
			<h3><?= $bon_plan->title ?></h3>
			<p>
				<?= $bon_plan->adresse.',<br>'.$bon_plan->city.',<br>'.$bon_plan->country ?>

				Pour plus d'infos:
				<a href="">http://utah.com/hiking/antelope-canyon</a><br>
				Description: <?= $bon_plan->getDescription(10); ?>

			</p>
		</figure>
	</div>

	<button type="button" class="btn btn-primary btn-lg btn-modal-open" data-bon-plan="<?= $bon_plan->id ?>">
		Voir plus..
	</button>
</div>
<?php } ?>