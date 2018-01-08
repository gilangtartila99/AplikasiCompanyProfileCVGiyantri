<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Berita */

$this->title = 'CV. GIYANTRI';
?>
<div class="berita-create">

    <div class="center">                
        <h2>Data Berita</h2>
        <p class="lead">Kelola Data Berita disini</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
