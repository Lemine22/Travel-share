<?php $this->layout('admin/layout', ['title' => 'Photo']) ?>

<?php $this->start('main_content') ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Photos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div><!-- /.row -->

		<div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Photos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="photo-list">
                              <thead>
                                <tr>
                                    <th>Photo Id</th>
                                    <th>Title</th>
                                    <th>Src</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach($photos as $photo) {
                                    $post_manager = new Manager\PostManager();
                                    $post = $post_manager->find($photo->post_id);
                                ?>
                                <tr class="odd">
                                    <td><?= $photo->id ?></td>
                                    <td>
                                        <a href="<?= $this->url('admin_post_edit', array('id' => $post->id)) ?>">
                                            <?= $post->name_bp.' ('.$post->city.' - '.$post->country.')' ?>
                                        </a>
                                    </td>
                                    <td><img height="100" src="<?= $this->assetUrl('images/bp/'.$post->id.'/'.$photo->src) ?>"></td>
                                    <td><?= $photo->getDate('d-m-Y H:i:s') ?></td>
                                    <td>
                                        <a href="<?= $this->url('admin_photo_edit', array('id' => $photo->id)) ?>"><i class="fa fa-pencil"></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="if (confirm('Etes-vous certain(e) de vouloir supprimer cette photo du post ID N° <?= addslashes($photo->post_id) ?> ?')) { location.href = '<?= $this->url('admin_photo_delete', array('id' => $photo->id)) ?>'; }"><i class="fa fa-trash"></i></a>
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
    $('#photo-list').DataTable({
        responsive: true
    });
});
</script>

<?php $this->stop('footer_scripts') ?>