<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gambar */

$this->title = 'CV. GIYANTRI';
?>
<div class="gambar-create">

    <div class="center">                
        <h2>Data Galeri</h2>
        <p class="lead">Kelola Data Galeri disini</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
