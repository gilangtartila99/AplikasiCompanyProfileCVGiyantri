<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'user_id')->textInput()->label(false) ?>

    <?= $form->field($model, 'isi_berita')->textArea(['rows' => 8]) ?>

    <div align="center" class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Buat Berita' : 'Edit Berita', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
