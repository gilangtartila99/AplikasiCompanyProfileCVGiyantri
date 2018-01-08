<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GambarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CV. GIYANTRI';
?>
<div class="gambar-index">

    <div class="center">                
        <h2>Data Galeri</h2>
        <p class="lead">Kelola Data Galeri disini</p>
    </div>

    <p align="center">
        <?= Html::a('Unggah Gambar', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        //'filterModel' => $searchModel,
        'columns' => [

            //'id_gambar',
            [
                'attribute' => 'img',
                'format' => 'html',
                'label' => 'Gambar',
                'value' => function ($data) {
                    return Html::img("images/gallery/" . $data['gambar'],
                        ['width' => '150px']);
                    },
            ],
            'nama_gambar',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{images} {view} {update} {delete}',
                'buttons' => [
                    'images' => function ($url, $model, $key) {
                         return Html::a('<span class="glyphicon glyphicon glyphicon-picture" aria-label="Image"></span>', Url::to(['updategambar', 'id' => $model->id_gambar]));
                    }
                ],
            ],
        ],
    ]); ?>
</div>
