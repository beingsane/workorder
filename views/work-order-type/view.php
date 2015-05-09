<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrderType */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Work Order Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
			]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
        'attributes' => [
            'id',
            'work_order_type',
        ],
    ]) ?>

</div>
