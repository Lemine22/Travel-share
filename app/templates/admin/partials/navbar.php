<?php
$pages= array (

    'Dashboard' => 'dashboard.php',
    'Charts' => 'dashboard.php',

    );
$current_page = basename($_SERVER['PHP_SELF']);
?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>-->
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?= $this->url('admin_dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="<?= $this->url('admin_user_list') ?>"><i class="fa fa-puzzle-piece fa-fw"></i> Users</a>
                        </li>

                        <li>
                            <a href="<?= $this->url('admin_post_list') ?>"><i class="fa fa-comments fa-fw"></i> Bons plans</a>
                        </li>
                        <li>
                            <a href="<?= $this->url('admin_photo_list') ?>"><i class="fa fa-camera-retro fa-fw"></i> Photos</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>