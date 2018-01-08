<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hubungi */

$this->title = 'CV. GIYANTRI';
?>
    <section id="contact-info">
        <div class="center">                
            <h2>Silahkan Hubungi Kontak Kami</h2>
            <p class="lead">Anda juga menghubungi kami dengan mengirim dibawah</p>
        </div>
        <div class="gmap-area" style="background-image: url('images/map.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;coord=-7.1793602,113.473475&amp;q=Jalmak%2026%20Pamekasan+(CV.%20GIYANTRI)&amp;aq=0&amp;ie=UTF8&amp;hnear=Jalmak%2026%20Pamekasan+(CV.%20GIYANTRI)&amp;ll=-7.1793602,113.473475&amp;spn=-7.1793602,113.473475&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-5 map-content">
                    <img src="images/logo4.png" width="300px" height="160px">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Kantor Pusat</h5>
                                    <p>Jalan Jalmak No 26 <br>
                                    Pamekasan, Madura 69351</p>
                                    <p>HP : +6281937330357 <br>
                                    Email : giyantri@gmail.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

<div class="center">                
    <p><h2>Masukkan Pesan Anda</h2></p>
    <p class="lead">Silahkan masukkan pesan anda dibawah ini</p>
</div>
<p>
<?= $this->render('hubungikami', [
    'model' => $model,
]) ?>
</p>