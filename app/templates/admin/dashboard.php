<?php $this->layout('admin/layout', ['title' => 'Admin Dashboard']) ?>

<?php $this->start('main_content') ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div><!-- /.row -->

		<?= $this->fetch('admin/partials/block-stats', array('total_posts' => $total_posts, 'total_photos' => $total_photos, 'total_users' => $total_users )) ?>

        <div class="row">

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Bons plans par pays
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Action
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Refresh</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="country-chart"></div>
                    </div>

                    <!-- /.panel-body -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Bon plans par villes
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                   Action
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Refresh</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="city-chart"></div>
                    </div>

                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

<?php $this->stop('main_content') ?>

<?= $this->start('footer_scripts') ?>

<script>
$(function() {

    if ($('#country-chart').length > 0) {
        Morris.Donut({
            element: 'country-chart',
            data: <?= json_encode($stat_countries) ?>,
           // labels: ['Ville', 'Bons plans'],
            hideHover: 'auto',
            resize: true
        });
    }

    if ($('#city-chart').length > 0) {
        Morris.Donut({
            element: 'city-chart',
            data: <?= json_encode($stat_cities) ?>,
           // labels: ['Ville', 'Bons plans'],
            hideHover: 'auto',
            resize: true
        });
    }

});
</script>

<?= $this->stop('footer_scripts') ?>