<?php $this->layout('admin/layout', ['title' => 'Post list']) ?>

<?php $this->start('main_content') ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Posts list</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div><!-- /.row -->

		<div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="post-list">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Title</th>
                                    <th>Name bp</th>
                                    <th>adresse</th>
                                    <th>Ville</th>
                                    <th>Pays</th>
                                    <th>Description</th>
                                    <th>Qui</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($posts as $post) { ?>
                                <tr class="odd">
                                    <td>
                                        <?php if ($post->status > 0) { ?>
                                        <span class="label label-success">Validé</span>
                                        <?php } else if ($post->status == -1) { ?>
                                        <span class="label label-danger">Refusé</span>
                                        <?php } else { ?>
                                        <span class="label label-warning">En attente</span>
                                        <?php } ?>
                                    </td>
                                    <td><?= $post->title ?></td>
                                    <td><?= $post->name_bp ?></td>
                                    <td><?= $post->adresse ?></td>
                                    <td><?= $post->city ?></td>
                                    <td><?= $post->country ?></td>
                                    <td><?= $post->description ?></td>
                                    <td><?= $post->qui ?></td>
                                    <td><?= $post->type ?></td>
                                    <td><?= $post->date ?></td>

                                    <td>
                                        <a href="<?= $this->url('admin_post_edit', array('id' => $post->id)) ?>"><i class="fa fa-pencil"></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="if (confirm('Etes-vous certain(e) de vouloir supprimer ce post <?= addslashes($post->name_bp) ?> ?')) { location.href = '<?= $this->url('admin_post_delete', array('id' => $post->id)) ?>'; }"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.row -->

<?php $this->stop('main_content') ?>

<?php $this->start('footer_scripts') ?>

<script>
$(document).ready(function() {
    $('#post-list').DataTable({
        responsive: true
    });
});
</script>

<?php $this->stop('footer_scripts') ?>