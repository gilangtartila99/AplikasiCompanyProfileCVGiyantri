<section id="portfolio">
    <div class="portfolio-item">
        <div class="portfolio-item">
            <div class="portfolio col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="responsive" src="images/gallery/<?= $model->gambar ?>" height="210px" width="450px" alt="">
                        <div class="overlay">
                            <div align="center" class="recent-work-inner">
                                <p></p>
                                <p><font color="#fff" size="5"><?= $model->nama_gambar ?></a> </font></p>
                            <a class="preview" width="100px" href="images/gallery/<?= $model->gambar ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> Lihat</a>
                            <!--rel="prettyPhoto"-->
                        </div> 
                    </div>
                </div>
            </div>  
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->