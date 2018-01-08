<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'CV. GIYANTRI';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    .background-login {
        background-color: #EDECEC;
        padding: 20px;
    }
    .background-label {
        background-color: #B40909;
        padding: 10px;
        color: #fff;
    }
</style>

<div class="center background-label">                
    <font color="#fff" size="6"><b>Masuk Admin</b></font>
    <p class="lead">Silahkan masuk sebagai admin.</p>
</div>

<div align="center" class="site-login thumbnail background-login">

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'class' => 'center',
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div align=\"center\">{input} {label}</div>\n{error}",
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Masuk', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
