<?php

/** @var yii\web\View $this */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Автомойки';
?>
<div class="site-index">

    <div class="body-content">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            'address',
            'rating',
            'work_hours',
            //'description:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('Просмотр', $url, ['class' => 'btn btn-sm btn-primary']);
                    },
                ],
            ],
        ],
    ]); ?>
    </div>
</div>
