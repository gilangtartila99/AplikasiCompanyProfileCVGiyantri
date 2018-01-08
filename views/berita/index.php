<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CV. GIYANTRI';
?>
<div class="berita-index">

    <div class="center">                
        <h2>Data Berita</h2>
        <p class="lead">Kelola Data Berita disini</p>
    </div>

    <p align="center">
        <?= Html::a('Buat Berita', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [

            //'id_berita',
            [
                'attribute' => 'img',
                'format' => 'html',
                'label' => 'Gambar',
                'value' => function ($data) {
                    return Html::img("images/berita/" . $data['gambar'],
                        ['width' => '150px']);
                    },
            ],
            'judul_berita',
            //'tanggal',
            [
                'label' => 'Tanggal',
                'value' => function($data) {
                    return Yii::$app->formatter->asDate($data->tanggal, 'dd MMMM Y');
                }
            ],
            //'user_id',
            [
                'label' => 'Nama Pengirim',
                'value' => function($data) {
                    return $data->user->nama;
                }
            ],
            //'isi_berita',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{images} {view} {update} {delete}',
                'buttons' => [
                    'images' => function ($url, $model, $key) {
                         return Html::a('<span class="glyphicon glyphicon glyphicon-picture" aria-label="Image"></span>', Url::to(['updategambar', 'id' => $model->id_berita]));
                    }
                ],
            ],
        ],
    ]); ?>
</div>
