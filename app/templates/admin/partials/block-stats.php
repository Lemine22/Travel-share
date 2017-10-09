
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $total_posts ?></div>
                                    <div>Bons plans</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= $this->url('admin_post_list') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les bons plans</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-camera-retro fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $total_photos ?></div>
                                    <div>Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= $this->url('admin_photo_list') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les photos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-puzzle-piece fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $total_users ?></div>
                                    <div>Inscriptions</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= $this->url('admin_user_list') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les inscrits</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cloud fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Météo</div>
                                </div>
                            </div>
                        </div>
                        <a href="http://www.accuweather.com/en/fr/paris/623/weather-forecast/623" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">Voir la météo</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->