<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gambar */

$this->title = 'CV. GIYANTRI';
?>
<div class="gambar-view">

    <div class="center">                
        <h2>Data Galeri</h2>
        <p class="lead">Kelola Data Galeri disini</p>
    </div>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id_gambar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Edit Gambar', ['updategambar', 'id' => $model->id_gambar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_gambar], [
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
            //'id_gambar',
            [
                'label' => 'Gambar',
                'value' => Html::img("images/gallery/".$model->gambar, ['width' => '300px']),
                'format' => 'raw'
            ],
            'nama_gambar',
        ],
    ]) ?>

</div>
