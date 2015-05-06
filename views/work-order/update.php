<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */

$this->title = 'Update Work Order: ' . ' ' . $model->wo;
$this->params['breadcrumbs'][] = ['label' => 'Work Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wo, 'url' => ['view', 'id' => $model->wo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
