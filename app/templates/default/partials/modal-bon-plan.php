
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					<div id="carousel-<?= $bon_plan->id ?>" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<?php foreach($bon_plan->photos as $key => $photo) { ?>
							<li data-target="#carousel-<?= $bon_plan->id ?>" data-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>"></li>
							<?php } ?>
						</ol>

						<div class="carousel-inner" role="listbox">

							<?php foreach($bon_plan->photos as $key => $photo) { ?>
							<div class="item<?= $key === 0 ? ' active' : '' ?>">
								<img src="<?= $this->assetUrl('images/bp/'.$bon_plan->id.'/'.$photo->src) ?>"/>
							</div>
							<?php } ?>
						</div>

						<a class="left carousel-control" href="#carousel-<?= $bon_plan->id ?>" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-<?= $bon_plan->id ?>" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

					<figure>
						<h3><?= $bon_plan->title ?></h3>
						<h4><?= $bon_plan->name_bp ?></h4>

						<strong><?= $bon_plan->type ?></strong>

						<p><?= $bon_plan->adresse .',<br>'.$bon_plan->city.' , '.$bon_plan->country.'.' ?><br>
							<span>Pour plus d'infos:</span>
							<a>http://utah.com/hiking/antelope-canyon</a><br>

							<span>Description: </span>
							<blockquote><?= $bon_plan->getDescription(); ?></blockquote>
						</p>
					</figure>
				</div>