<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

$asset = app\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="homepage">
<?php $this->beginBody() ?>

    <header id="header">
        <div class="top-bar"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +62819 3733 0357, +6282 1318 61663  <i class="fa fa-envelope"></i>  giyantri@gmail.com</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a target="_blank" href="https://www.facebook.com/tatangtartila.azis"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <?php if (!Yii::$app->user->isGuest) { ?>
                                    <li><a href="index.php?r=site%2Flogout"><i class="fa fa-sign-out"></i></a></li>
                                <?php } else { ?>
                                    <li><a href="index.php?r=site%2Flogin"><i class="fa fa-sign-in"></i></a></li>
                                <?php } ?>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" width="300px" height="65px" alt="logo"></a>
                </div>
                <?php if (!Yii::$app->user->isGuest) { ?>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Halaman Utama</a></li>
                        <li><a href="index.php?r=berita%2Findex">Data Berita</a></li>
                        <li><a href="index.php?r=gambar%2Findex">Galeri Foto</a></li>
                        <li><a href="index.php?r=users%2Findex">Data Pengguna</a></li> 
                        <li><a href="index.php?r=hubungi%2Findex">Data Hubungi Kami</a></li>                        
                    </ul>
                </div>
                <?php } else { ?>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Halaman Utama</a></li>
                        <li><a href="index.php?r=site%2Fberita">Berita</a></li>
                        <li><a href="index.php?r=site%2Fgaleri">Galeri Foto</a></li>
                        <li><a href="index.php?r=site%2Fabout">Tentang Kami</a></li> 
                        <li><a href="index.php?r=site%2Fhubungi">Hubungi Kami</a></li>                        
                    </ul>
                </div>
                <?php } ?>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <style type="text/css">
        .logo-margin {
            padding: 50px;
        }

        .posisi {
            padding-top: 150px;
        }
    </style>

    <section id="main-slider" class="no-margin">
        <div class="slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg4.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content posisi">
                                    <h1 class="animation animated-item-1">CV. GIYANTRI</h1>
                                    <font color="#fff" size="4" class="animation animated-item-2">Bergerak pada bidang layanan pengadaan barang dan jasa</font>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/logo3.png" width="400px" height="400px" class="img-responsive logo-margin">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content posisi">
                                    <h1 class="animation animated-item-1">CV. GIYANTRI</h1>
                                    <font color="#fff" size="4" class="animation animated-item-2">Layanan mencakup jasa konstruksi, jasa pengadaan dan perdagangan umum</font>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/logo3.png" width="400px" height="400px" class="img-responsive logo-margin">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="recent-works">
                <div class="container">
                    <?= $content ?>
                </div>
    </section><!--/#content-->

    <section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown">
                <h2>Pelayanan Kami</h2>
                <p class="lead">Pelayanan perusahaan yang diberikan kepada konsumen.</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Tepat Kualitas</h3>
                            <p>Pengerjaan dilakukan dengan kualitas yang standar yang ditentukan</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Tepat Waktu</h3>
                            <p>Pengerjaan dilakukan tepat waktu sesuai waktu yang ditentukan</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Tepat Spesifikasi</h3>
                            <p>Pengerjaan dilakukan dengan spesifikasi yang diminta oleh konsumen</p>
                        </div>
                    </div>
                </div>                                             
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?= date('Y') ?> <a target="_blank" href="http://github.com/gilangtartila99" title="Free Twitter Bootstrap WordPress Themes and HTML templates">CV. GIYANTRI</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li>Created by <a target="_blank" href="http://github.com/gilangtartila99" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Gilang R. Tartila</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
