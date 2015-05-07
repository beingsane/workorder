<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WorkOrderType */

$this->title = 'Create Work Order Type';
$this->params['breadcrumbs'][] = ['label' => 'Work Order Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
