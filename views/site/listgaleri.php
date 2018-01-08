<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$title = 'CV. GIYANTRI';
$this->title = Html::encode($title);
?>

<div class="center wow fadeInDown">
    <h2>Galeri Foto</h2>
    <p class="lead">Galeri foto dari pekerjaan yang pernah dikerjakan.</p>
</div>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => 'galeri',
]) ?>