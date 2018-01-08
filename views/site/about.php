<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'CV. GIYANTRI';
?>
<style type="text/css">
	.bulat{
		border-radius:100em;
		width:300px;
		height:300px;
	}
</style>
<section id="about-us">
        <div class="container">
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <!--<li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>-->
				  	</ol>

					<div align="center" class="carousel-inner">
						<div class="item active">
							<img align="center" src="images/logo4.png" width="550px" height="300px" class="img-responsive" alt="">
					   </div>
					   <!--<div class="item">
							<img align="center" src="images/logo4.png" width="550px" height="300px" class="img-responsive" alt="">
					   </div> 
					   <div class="item">
							<img align="center" src="images/logo4.png" width="550px" height="300px" class="img-responsive" alt="">
					   </div>-->
					</div>
					
					<!--<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>-->
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->


			<div class="center wow fadeInDown">
				<h2>Tentang Perusahaan</h2>
				<p class="lead">Perusahaan ini merupakan perusahaan yang bergerak di bidang layanan seperti pengadaan barang dan jasa. Layanan yang dimaksud mencakup jasa konstruksi, jasa pengadaan dan perdagangan umum.</p>
			</div>

			<!-- our-team -->
			<p>
			<div class="team">
				<!--<div class="center wow fadeInDown">
					<h2>Direktur Perusahaan</h2>
				</div>-->

				<div align="center" class="row clearfix">
					<div align="center">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div align="center">
									<p><a href="#"><img class="media-object bulat" src="images/tatang.jpg" alt=""></a></p>
								</div>
								<div class="media-body">
									<h4>Tatang Tartila Aziz, SE</h4>
									<h5>Direktur Utama CV. GIYANTRI</h5>
									<h5>NPWP : 02.083.279.6.608.000</h5>
									
									<ul class="social_icons">
										<li><a href="https://www.facebook.com/tatangtartila.azis"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://plus.google.com/106475801012348628274"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
						</div>
					</div><!--/.col-lg-4 -->
				</div>	<!--/.row-->
			</div><!--section-->
			</p>
		</div><!--/.container-->
    </section><!--/about-us-->
 