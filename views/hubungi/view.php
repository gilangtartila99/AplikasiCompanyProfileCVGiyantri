<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hubungi */

$this->title = 'CV. GIYANTRI';
?>
<div class="hubungi-view">

    <div class="center">                
        <h2>Data Hubungi Kami</h2>
        <p class="lead">Kelola Data Hubungi Kami disini</p>
    </div>

    <p>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_hubungi], [
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
            //'id_hubungi',
            'nama',
            'email:email',
            'judul',
            'pesan',
        ],
    ]) ?>

</div>
