<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PriorityLevel */

$this->title = 'Update Priority Level: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Priority Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="priority-level-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
