<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hubungi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hubungi-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-6">
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-6">
    	<?= $form->field($model, 'pesan')->textArea(['rows' => 7]) ?>

    	<div align="center" class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Kirim Pesan' : 'Edit', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
	    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
