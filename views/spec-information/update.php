<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpecInformation */

$this->title = 'Update Spec Information: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Spec Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spec-information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
