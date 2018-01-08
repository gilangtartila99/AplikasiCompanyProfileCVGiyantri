<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'CV. GIYANTRI';
?>
<div class="users-view">

    <div class="center">                
        <h2>Data Pengguna</h2>
        <p class="lead">Kelola Data Pengguna disini</p>
    </div>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'Anda yakin ingin menghapus ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            'password',
            //'authKey',
            //'accessToken',
            'nama',
            'jenis_kelamin',
            'email:email',
            'no_telp',
        ],
    ]) ?>

</div>
