<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CarWash $model */

$this->title = 'Create Car Wash';
$this->params['breadcrumbs'][] = ['label' => 'Car Washes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-wash-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
