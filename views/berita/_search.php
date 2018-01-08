<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BeritaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <style type="text/css">
        .formbaru {
            padding-top: 12px;
        }
        .tombol {
            width: 150px;
        }
    </style>

<div class="col-lg-12">
    <div class="col-lg-5 formbaru">
        <?= $form->field($model, 'judul_berita')->textInput(['placeholder' => 'Judul Berita'])->label(false) ?>
    </div>

    <div class="col-lg-5 formbaru">
        <?= $form->field($model, 'tanggal')->textInput(['placeholder' => 'Tanggal'])->label(false) ?>
    </div>

    <div class="col-lg-2">
        <?= Html::submitButton('Cari', ['class' => 'btn btn-primary tombol']) ?>
    </div>
</div>

    <?php ActiveForm::end(); ?>

</div>
