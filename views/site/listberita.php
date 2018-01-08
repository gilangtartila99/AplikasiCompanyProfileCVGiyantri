<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$title = 'CV. GIYANTRI';
$this->title = Html::encode($title);
?>
<div class="center">
    <h2>Berita</h2>
    <p class="lead">Berita - berita tentang CV. GIYANTRI</p>
</div>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => 'berita',
]) ?>