<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gambar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gambar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_gambar')->textInput(['maxlength' => true]) ?>

    <div align="center" class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Unggah Gambar' : 'Edit Gambar', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
