<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */

$this->title = 'CV. GIYANTRI';
?>
<div class="berita-view">

    <div class="center">                
        <h2>Data Berita</h2>
        <p class="lead">Kelola Data Berita disini</p>
    </div>


    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Edit Gambar', ['updategambar', 'id' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_berita], [
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
            //'id_berita',
            [
                'label' => 'Gambar',
                'value' => Html::img("images/berita/".$model->gambar, ['width' => '300px']),
                'format' => 'raw'
            ],
            'judul_berita',
            //'tanggal',
            [
                'label' => 'Tanggal',
                'value' => Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM Y'),
            ],
            //'user_id',
            [
                'label' => 'Nama Pengirim',
                'value' => $model->user->nama,
            ],
            'isi_berita',
        ],
    ]) ?>

</div>
