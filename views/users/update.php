<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'CV. GIYANTRI';
?>
<div class="users-update">

    <div class="center">                
        <h2>Data Pengguna</h2>
        <p class="lead">Kelola Data Pengguna disini</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
