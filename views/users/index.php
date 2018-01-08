<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CV. GIYANTRI';
?>
<div class="users-index">

    <div class="center">                
        <h2>Data Pengguna</h2>
        <p class="lead">Kelola Data Pengguna disini</p>
    </div>
    

    <p align="center">
        <?= Html::a('Buat Pengguna', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        //'filterModel' => $searchModel,
        'columns' => [

            //'id',
            'username',
            'password',
            //'authKey',
            //'accessToken',
            'nama',
            'jenis_kelamin',
            'email:email',
            'no_telp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
