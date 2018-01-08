<section id="blog" class="container">
        <div class="center">
            <h2>Berita</h2>
            <p class="lead">Berita - berita tentang CV. GIYANTRI</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                    <div class="blog-item">
                        <div class="row thumbnail">
                            <div class="col-xs-12 col-sm-3 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM Y') ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?= $model->user->nama ?></a></span>
                                    <span><i class="fa fa-envelope"></i> <a href="#"><?= $model->user->email ?></a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-8 blog-content">
                                <h2><a href="blog-item.html"><?= $model->judul_berita ?></a></h2>
                                <a href="#"><img class="img-responsive img-blog" src="images/berita/<?= $model->gambar ?>" width="100%" alt="" /></a>
                                <h3><?= $model->isi_berita ?></h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->