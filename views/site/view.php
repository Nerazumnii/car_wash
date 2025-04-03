<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CarWash $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Car Washes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="car-wash-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
echo $model->address;
?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
            'address',
            'rating',
            'work_hours',
            'description:ntext',
        ],
    ]) ?>

</div>