<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HubungiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CV. GIYANTRI';
?>
<div class="hubungi-index">

    <div class="center">                
        <h2>Data Hubungi Kami</h2>
        <p class="lead">Kelola Data Hubungi Kami disini</p>
    </div>
    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [

            //'id_hubungi',
            'nama',
            'email:email',
            'judul',
            //'pesan',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
            ],
        ],
    ]); ?>
</div>
