<?php $this->layout('admin/layout', ['title' => 'User list']) ?>

<?php $this->start('main_content') ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
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
                                    <th>id</th>
                                    <th>Pseudo</th>
                                    <th>User_picture</th>
                                    <th>Login</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($users as $user) { ?>
                                <tr class="odd">
                                    <td><?= $user->id ?></td>
                                    <td><?= $user->pseudo ?></td>
                                    <td><?= $user->user_picture ?></td>
                                    <td><?= $user->role ?></td>
                                    <td><?= $user->login ?></td>

                                    <td>
                                        <a href="<?= $this->url('admin_user_edit', array('id' => $user->id)) ?>"><i class="fa fa-pencil"></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="if (confirm('Etes-vous certain(e) de vouloir supprimer ce user <?= addslashes($user->pseudo) ?> ?')) { location.href = '<?= $this->url('admin_user_delete', array('id' => $user->id)) ?>'; }"><i class="fa fa-trash"></i></a>
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
    $('#user-list').DataTable({
        responsive: true
    });
});
</script>

<?php $this->stop('footer_scripts') ?>