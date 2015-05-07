<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkOrderTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Work Order Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Work Order Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
        'columns' => [
            'id',
            'work_order_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
